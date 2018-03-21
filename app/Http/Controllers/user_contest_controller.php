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
        $C = DB::table('contests')->where('active','=',true)->first();
        $question = DB::table('questions')->where('id','=',$C->currentquestion_id)
            //->where('contest_id','=',$C->id)
            ->first();
        $answers = DB::table('questions_answers')
            ->where('question_id','=',$question->id)
            ->get(); 
        return view('UserContest',compact('question'),compact('answers'));
    }               
    public function transmit_answer(Request $request){//Gui Dap An Len Table History
      //test request
      $request['user_id']=1;
      $request['contest_id']=1;
      $request['question_id']=1;
      $request['questions_answer_id']='A';
      
        /*$history = new histories;
        $history->user_id=$request['user_id'];
        $history->contest_id=$request['contest_id'];
        $history->question_id=$request['question_id'];
        $history->questions_answer_id=$request['questions_answer_id'];
        $history->save(); 
        */
        //$user=users::find($request['user_id']);
        //env('TIME_LIMIT',31);
        $time=contest::find($request['question_id']);
        $time_question="2018-12-12 12:12:12";//test time $time->startcurrentquestion; // tg bd cau hoi 
        $arr2=preg_split("/\ /",$time_question);
        $arr_day_question=preg_split("/\-/",$arr2[0]);
        $arr_time_question=preg_split("/\:/",$arr2[1]);
        $time_answer=now();//tg tra loi
        $arr=preg_split("/\ /",$time_answer);
        $arr_day_answer=preg_split("/\-/",$arr[0]);
        $arr_time_answer=preg_split("/\:/",$arr[1]);
        //$time_question=$time->startcurrentquestion;//tg tra loi
        if ($arr_time_question[2]+31<60) $arr_time_question[2]+=31;
        else {
            $arr_time_question[2]=31-(60-$arr_time_question[2]);
            if ($arr_time_question[1]+1<60) $arr_time_question[1]+=1;
            else {
                $arr_time_question[1]=0;
                $arr_time_question[0]+=1;
            }
      }
      if ($arr_time_answer[0]<$arr_time_question[0] ) $x=true;
      else {
         if ($arr_time_answer[0]==$arr_time_question[0] ){  
              if ($arr_time_answer[1]<$arr_time_question[1]) $x=true;
              else {
                  if ($arr_time_answer[1]==$arr_time_question[1] ){
                        if ($arr_time_answer[2]<=$arr_time_question[2]){
                          $x=true;
                        }
                        else $x=false;
                  }else $x=false;
              }
         }
         else $x=false; 
      }
      $user = DB::table('users')->where('id','=',$request['user_id'])->first(); 
      $answer=Question::find($request['question_id']); 
      if ($request['questions_answer_id']==$answer['abcd']  && $x){
            $user->active=true;
        }
        else {
          $user->active=false;
        }
    }

    public function time() {
      $user=DB::table('contests')->where('active','=',true)->first();   
      echo($user->id."\n");
      echo($user->currentquestion_id."\n");
      echo($user->startcurrentquestion."\n");   
      echo(now()."\n");    
    }
}
