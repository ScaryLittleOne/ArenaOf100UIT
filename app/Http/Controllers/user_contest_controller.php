<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use DB;
use App\Contest;
use Illuminate\Http\Request;

class user_contest_controller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkactive');
    }
    public function index(){
    	//$this->middleware('checkactive');

    	/*$user = Auth::user();
        if ($user->active==false){
           	abort(403, 'Go Home Bitch. U Loser');
        }*/ 

        $CQ=DB::table('contests')->get();
        //var_dump($CQ);
        echo $CQ->currentquestion_id;
    	return view('UserContest');
    }
    public function Receive_Anser(){

    }
}
