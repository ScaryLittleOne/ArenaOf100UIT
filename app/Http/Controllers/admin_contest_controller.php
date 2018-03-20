<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Question;
use App\Contest;
use DB;

class admin_contest_controller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkadmin');
    }
    public function index(){

    	$questions = Question::all();
        $questioncurrent = DB::table('contests')->where('active','=',true)->get();
    	return view('AdminContest',compact('questions'),compact('questioncurrent'));
    }

    public function change(){
    	//var_dump($request->id);
    	///Doi cau hoi hien tai trong table contest
    	///
        Contest::where('active', 1)->update(['currentquestion_id'=>DB::raw('currentquestion_id+1')]);
    }
}
