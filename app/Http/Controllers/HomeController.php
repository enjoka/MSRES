<?php

namespace App\Http\Controllers;

use App\Models\UserPrivilege;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->hasRole(UserPrivilege::CANDIDATE_ROLE)){

            return redirect()->to('student-results');
        }
        return view('home');
    }
}
