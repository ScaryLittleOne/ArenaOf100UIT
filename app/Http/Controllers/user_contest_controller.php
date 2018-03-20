<?php

namespace App\Http\Controllers;
use App\contest;
use DB;
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
        $CQ=DB::table('contests')->get();
        echo(date("Y-m-d H:i:s")); echo ("<br>");
        echo(now());
      return view('usercontest.show',compact('CQ'));
    }   
}

