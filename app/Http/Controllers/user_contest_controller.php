<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Contest;
use App\Question;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class user_contest_controller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkactive');
    }
    public function index(){
        $CQ = Question::select('questions.*','contests.*')  //Lay Duoc Cau Hoi Hien Tai Dua Tren Bang Contest
            ->join('contests','questions.id','=','contests.currentquestion_id')
            ->where('contests.active','=',1)
            ->groupBy('questions.id')->get();
        //var_dump($CQ);
    	return view('UserContest');
    }
    public function receive_answer(Request $request){
        $history = new History;
        $history->user_id=$request['user_id'];
        $history->contest_id=$request['contest_id'];
        $history->question_id=$request['question_id'];
        $history->questions_answer_id=$request['questions_answer_id'];
        $history->save();
        return view('UserContest');
    }
}

