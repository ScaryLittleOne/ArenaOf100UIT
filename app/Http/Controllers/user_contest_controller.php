<?php

namespace App\Http\Controllers;
use App\usercontest;
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
<<<<<<< HEAD
          $CQ = Question::select('questions.*','contests.*') 
            ->join('contests','questions.id','=','contests.currentquestion_id')
            ->where('contests.active','=',1)
            ->groupBy('questions.id')->get();
    	return view('UserContest');
=======
        //Lay ra cau hoi voi cac dieu kien 1. Contest active=1 2. id cua contest = questions.contest_id
        /*$CQ = Question::select('questions.*','contests.id')  //Lay Duoc Cau Hoi Hien Tai Dua Tren Bang Contest (Sai )
            ->join('contests', function ($join) {
                $join->on('questions.id','=','currentquestion_id')
                ->where('active','=',true)
                ;
            }) 
            ->groupBy('questions.id','contests.id')
            ->having('contests.id','=','questions.contest_id')
            ->get();*/
        $C = DB::table('contests')->where('active','=',true)->first();
        $question = DB::table('questions')->where('id','=',$C->currentquestion_id)
            ->where('contest_id','=',$C->id)
            ->first();
        //lay cau tra loi dua vao cau hoi da lay duoc
        $answers = DB::table('questions_answers')
            ->where('question_id','=',$question->id)
            ->get();

        return view('UserContest',compact('question'),compact('answers'));
>>>>>>> 6c053dbb0ee419dd8e9a119f30b77e133d53ebb4
    }
    public function transmit_answer(Request $request){//Gui Dap An Len Table History
        $history = new History;
        $history->user_id=$request['user_id'];
        $history->contest_id=$request['contest_id'];
        $history->question_id=$request['question_id'];
        $history->questions_answer_id=$request['questions_answer_id'];
        $history->save();
        return view('UserContest');
    }
    public function show_histories(){
        $question = DB::table('histories')->where('user_id','=',1)->get();
         return view('usercontest.show_histories',compact('question'));//
    }
}

