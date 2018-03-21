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
        $contest = Contest::find();
        
    	return view('AdminContest',compact('questions'),compact('contests'));
    }

    public function change(Request $request, Contest $contest){
    	var_dump($request->id);
    	///Doi cau hoi hien tai trong table contest
    	///
        //$contest = new Contest;
        //$contest = Contest::find($request['contest_id']);
        $contest_id = $request['contest_id'];
        $contest->active = true;
        $contest->currentquestion_id = $request->id;
    	return $this->index();
    }
}
