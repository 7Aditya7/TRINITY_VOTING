<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateController;
use App\Models\Candidate;
use App\Models\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/vote', [CandidateController::class, 'vote']);
Route::get('vote', [CandidateController::class, 'voteCandidate']);


Route::get('/login', [CustomAuthController::class, 'login'])->middleware('alreadyLoggedIn', 'adminAlreadyLoggedIn');
Route::get('/register', [CustomAuthController::class, 'register'])->middleware('alreadyLoggedIn', 'adminAlreadyLoggedIn');
Route::get('/password', function () {
    return view('setPassword');
});
Route::get('/result', function () {
    if (session('loginId')) {
        $can = Candidate::where('district', 'LIKE', '%' . session('loginId')->district . '%')->orderBy('votes', 'desc')->first();
    } else
        $can = 0;

    $res = Admin::select('result')->first();
    return view('result', compact('can', 'res'));
});
Route::post('result', [CandidateController::class, 'result']);

// Route::get('/candidate',function(){
//     return view('candidate');
// });

Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [CustomAuthController::class, 'logout']);

// added route:get for userProfile
Route::get('/userProfile', [CustomAuthController::class, 'userProfile'])->middleware('isLoggedIn');

//admin
Route::get('/admin', [CustomAuthController::class, 'adminLogin'])->middleware('adminAlreadyLoggedIn');
Route::post('/login-admin', [CustomAuthController::class, 'loginAdmin']);
Route::get('/adminDashboard', [CustomAuthController::class, 'adminDashboard'])->middleware('adminLoggedIn');
Route::get('/adminLogout', [CustomAuthController::class, 'adminLogout']);

//The /reset route logout the User and Admin at once. only use if necessary. 
Route::any('/reset', [CustomAuthController::class, 'resetSession']);


//candidate
Route::resource('candidates', CandidateController::class)->middleware('adminLoggedIn');

//search candidate


Route::get('candidate', [CandidateController::class, 'getCandidate']);
Route::post('candidate', [CandidateController::class, 'updateCandidate']);
//navbar
Route::get('navbar', [CandidateController::class, 'navbar']);

//manage result
Route::get('manageResult', [CandidateController::class, 'manageResult']);
Route::post('publishResult', [CandidateController::class, 'publishResult']);
