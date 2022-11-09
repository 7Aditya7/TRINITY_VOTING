<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Candidate;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Symfony\Component\HttpFoundation\Session\Session;
class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function register(){
        return view("auth.register");
    }

    public function registerUser(Request $request){

        $request->validate([
            'voterId'=>'required|unique:users',
            'citizenshipNumber'=>'required|unique:users',
            'name'=>'required',
            'motherName'=>'required',
            'fatherName'=>'required',
            'province'=>'required',
            'district'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'phoneNumber'=>'required| digits:10 |unique:users',
            'photo'=>'image|mimes:jpeg,png,jpg,gif,svg',
            'email'=>'required|unique:users',
            'password'=>'required|max:12|min:6'


        ]);
        $user=new user();
        $user->voterId=$request->voterId;
        $user->citizenshipNumber=$request->citizenshipNumber;
        $user->name=$request->name;
        $user->motherName=$request->motherName;
        $user->fatherName=$request->fatherName;
        $user->province=$request->province;
        $user->district=$request->district;
        $user->gender=$request->gender;
        $user->dob=$request->dob;
        $user->phoneNumber=$request->phoneNumber;      
        $user->email=$request->email;
        $user->password= FacadesHash::make($request->password);
        //storing photo
        
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('user/image'), $filename);
        $user->photo= $filename;
        //storing photo end
        $res=$user->save();
        
        if($res)
        {
            return back()->with('success','You have registered successfully');
        }
        else{
            return back()->with('fail','Something wrong');
        }
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'voterId'=>'required', 
            'password'=>'required',
        ]);
        $user = User::where('voterId','=',$request->voterId)->first();
        if($user){
                if(FacadesHash::check($request->password, $user->password)){
                    
                    $loginId=$user->Id;
                    $district=$user->district;
                    
                    $request->session()->put('loginId', $user);
                  
                    return redirect('dashboard');
                    return view('components.navbar',compact(['user']));
                }
                else{
                    return back()->with('fail','Incorrect password');

                }
        }
        else{
            return back()->with('fail','This voter Id is not registered');
        }
        
    }
    public function dashboard(){
        $data = array();
        if(Session()->has('loginId')){
            $data = User:: where('id', '=', Session()->get('loginId'))->first();
        }
       
        return view('dashboard' , compact('data'));
    }

    // added controller for userProfile
    public function userProfile(){
        $data = array();
        if(Session()->has('loginId')){
            $data = User:: where('id', '=', Session()->get('loginId'))->first();
        }
       
        return view('userProfile' , compact('data'));
    }
   
    public function logout(){
        if(session()->has('loginId')){
            session()->pull('loginId');
           return redirect('login');
        }
    }

    //Admin

    public function loginAdmin(Request $request)
    {
        $request->validate([
            'email'=>'required', 
            'password'=>'required',
        ]);
        $admin = Admin::where('email','=',$request->email)->first();
        if($admin){
                if(FacadesHash::check($request->password, $admin->password)){
                    
                    $request->session()->put('adminId', $admin->id);
                    return redirect('adminDashboard');
                    return view('components.admin-navbar',compact(['admin']));
                }
                else{
                    return back()->with('fail','Incorrect password');

                }
        }
        else{
            return back()->with('fail','This email is not registered');
        }
        
    }
  public function adminLogin(){
    return view('admin.adminLogin');
  }
  public function adminDashboard(){
    $data = array();
   
    if(Session()->has('adminId')){
        $data = User:: where('id', '=', Session()->get('adminId'))->first();

        // $VoterCount = User:: get()->count();
        // $CandidateCount = Candidate:: get()->count();
        // $Casted = User:: where('hasVoted','=','1')->get()->count();
       
        // $maleCount= User::where('gender','=','male')->get()->count();
        // $femaleCount= User::where('gender','=','female')->get()->count();
        
        $UserCountData = array (
            "VoterCount" => User:: get()->count(),
            "CandidateCount" => Candidate:: get()->count(),
            "Casted" => User:: where('hasVoted','=','1')->get()->count(),
            "maleCount" => User::where('gender','=','male')->get()->count(),
            "femaleCount" => User::where('gender','=','female')->get()->count() ,
            "othersCount" => User::where('gender','=','other')->get()->count() ,

        );

//         Age
//         $dateOfBirth = '1992-4-4';
// $age = \Carbon\Carbon::parse($dateOfBirth)->age;
// echo "You are ". $age . " years old";
        $under60=0;
        $above60=0;
        $user = User::get();
        foreach($user as $usr){
            $age = \Carbon\Carbon::parse($usr->dob)->age;
            if($age<60)
            {
                $under60++;
            }
            if($age>=60)
            {
                $above60++;
            }

        }
        
        $CandidateInfo =Candidate::get();
        $AgeGroup = array(
            'Below60' => $under60,
            'Above60' => $above60,
        );

    }
   
    // return view('admin.adminDashboard' , compact('data','VoterCount','CandidateCount','Casted','VoterGender'));
    return view('admin.adminDashboard' , compact('data','UserCountData','CandidateInfo','AgeGroup'));
}
public function adminLogout(){
    if(session()->has('adminId')){
        session()->pull('adminId');
       return redirect('login');
    }
}
public function resetSession(){
    if(session()->has('loginId')){
        session()->pull('loginId');
       
    }
    if(session()->has('adminId')){
        session()->pull('adminId');  
    }
    return redirect('login')->with('message', 'All Session Ended.');
}
}
