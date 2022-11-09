<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = Candidate::latest()->paginate(5);

        return view('candidates.index', compact('candidates'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'province' => 'required',
            'district' => 'required',
            'photo' => 'required',
            'partyName' => 'required',
            'partyLogo' => 'required',
            'post' => 'required',

        ]);

        // Candidate::create($request->all());

        // return redirect()->route('candidates.index')
        //                 ->with('success','Candidate added successfully.');

        $candidate = new candidate();
        $candidate->name = $request->name;
        $candidate->age = $request->age;
        $candidate->gender = $request->gender;
        $candidate->province = $request->province;
        $candidate->district = $request->district;
        //storing photo        
        $file = $request->file('photo');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('candidateImage'), $filename);
        $candidate->photo = $filename;
        //storing photo end
        $candidate->partyName = $request->partyName;
        //storing party logo        
        $file = $request->file('partyLogo');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('candidateImage'), $filename);
        $candidate->partyLogo = $filename;
        //storing party logo end
        $candidate->post = $request->post;
        $candidate->remarks = $request->remarks;
        $res = $candidate->save();

        if ($res) {
            return redirect()->route('candidates.index')->with('success', 'Candidate added successfully.');
        } else {
            return redirect()->route('candidates.index')->with('fail', 'Candidate is not added.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        return view('candidates.show', compact('candidate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        return view('candidates.edit', compact('candidate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'province' => 'required',
            'district' => 'required',
            'photo' => 'required',
            'partyName' => 'required',
            'partyLogo' => 'required',
            'post' => 'required',
        ]);

        $candidate->update($request->all());

        return redirect()->route('candidates.index')
            ->with('success', 'Candidate updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        $candidate->delete();

        return redirect()->route('candidates.index')
            ->with('success', 'Candidate deleted successfully');
    }



    public function getCandidate()
    {
        if (session('loginId')) {
            $x = 0;
            $i = 0;
            $user = session('loginId');
            $localCan = Candidate::where('district', 'LIKE', '%' . $user->district . '%')->get();
            return view('candidate', compact('x', 'localCan', 'i'));
        } else {
            $x = 0;
            return view('candidate', compact('x'));
        }
    }

    public function updateCandidate(Request $req)
    {

        $can = Candidate::where('district', 'LIKE', '%' . $req->district . '%')->get();
        $province_no = $req->province;
        $district_no = $req->district;
        $x = 1;
        $i = 0;
        return view('candidate', compact('x', 'can', 'i', 'province_no', 'district_no'));
    }

    public function result(Request $req)
    {

        $can = Candidate::where('district', 'LIKE', '%' . $req->district . '%')->orderBy('votes', 'desc')->first();
        $province_no = $req->province;
        $district_no = $req->district;
        $res = Admin::select('result')->first();
        return view('result', compact('can', 'province_no', 'district_no', 'res'));
    }


    public function voteCandidate()
    {
        return view('vote');
    }

    public function vote(Request $req)
    {
        $candidate = Candidate::findOrFail($req->id);
        $candidate->votes++;
        $candidate->save();

        $v_id = session('loginId')->id;
        $voter = User::findOrFail($v_id);
        $voter->hasVoted = 1;
        $voter->save();

        return redirect()->back()->with('success', 'Voted Successfully');
    }
    public function manageResult()
    {
        $result = Admin::Select('result')->first();
        return view('admin.manageResult', compact('result'));
    }
    public function publishResult(Request $req)
    {

        $admin = Admin::first();
        $value = isset($req->result) ? 1 : 0;
        $admin->result = $value;
        $admin->save();
        return redirect()->back();
    }
}
