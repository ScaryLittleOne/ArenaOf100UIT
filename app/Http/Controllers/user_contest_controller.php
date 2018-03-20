<?php

namespace App\Http\Controllers;
use App\usercontest;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class user_contest_controller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkactive');
    }
    public function index(){
          echo(now());
          echo(date('Y-m-d H:i:s'));
        	return view('usercontest.show');
    }
    public function Receive_Anser(){

    }
    public function show_histories(){
        $question = DB::table('histories')->where('user_id','=',1)->get();
         return view('usercontest.show_histories',compact('question'));//
      //  echo($question->user_id);
       // echo($question->contest_id);
    }
}

