<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class user_contest_controller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('checkadmin');
    }
    public function index(){
    	//$this->middleware('checkactive');

    	$user = Auth::user();
        if ($user->active==false){
           	abort(403, 'Go Home Bitch. U Lost');
        }
        
    	return view('UserContest');
    }
}
