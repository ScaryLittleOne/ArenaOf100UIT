<?php

namespace App\Http\Controllers;
use App\usercontest;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Contest;
use App\Question;
use App\History;
use App\Questions_answer; 
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
          if ($question->id==1) {
            return(view('usercontest.show'));
          }
        $answers = DB::table('questions_answers')
            ->where('question_id','=',$question->id)
            ->get(); 
        
        return view('UserContest',
            ['contest_id' => $C->id, 'user' => Auth::user(), 'question' => $question, 'answers' => $answers]
        );

        return view('UserContest',compact('question'),compact('answers'));

    }               
    public function transmit_answer(Request $request){//Gui Dap An Len Table History
         $time=DB::table('contests')->where('currentquestion_id','=',$request['question_id'])->first();
         $currentquestion=DB::table('contests')->where('active','=',0)->first();
         if ($currentquestion)  return view('errors.500');
         $time_question=$time->startcurrentquestion;//tg bat dau cau hoi
        // echo("thoi gian bd".$time_question) ; 
         $arr2=preg_split("/\ /",$time_question);
         $arr_day_question=preg_split("/\-/",$arr2[0]);
         $arr_time_question=preg_split("/\:/",$arr2[1]);
         $time_answer=now();//tg tra loi
         //echo("tg tra loi".$time_answer);
         $arr=preg_split("/\ /",$time_answer);
         $arr_day_answer=preg_split("/\-/",$arr[0]);
         $arr_time_answer=preg_split("/\:/",$arr[1]);
        if ($arr_time_question[2]+env('TIME_LIMIT')<60) $arr_time_question[2]+=env('TIME_LIMIT');
        else {
            $arr_time_question[2]=env('TIME_LIMIT')-(60-$arr_time_question[2]);
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
        $old_history = History::where([
            'user_id' => $request['user_id'],
            'contest_id' => $request['contest_id'],
            'question_id' => $request['question_id']
        ]);
        

        if ($old_history->get()->count() == 0){

            if ($x == true) History::create(        [
                'user_id' => $request['user_id'],
                'contest_id' => $request['contest_id'],
                'questions_answer_id' => $request['questions_answer_id'],
                'question_id' => $request['question_id'],
                ]);
        } else {
            if ($x == true) {
                $old_history->update(        [
                    'user_id' => $request['user_id'],
                    'contest_id' => $request['contest_id'],
                    'questions_answer_id' => $request['questions_answer_id'],
                    'question_id' => $request['question_id']
                    ]);
                return redirect('usercontest');  
            }
        }
        if ($x==true){
        return redirect('usercontest');  
        }
        else  return view('errors.500');
}
    

    public function time() {
      $user=DB::table('contests')->where('active','=',true)->first();   
      echo($user->id."\n");
      echo($user->currentquestion_id."\n");
      echo($user->startcurrentquestion."\n");   
      echo(now()."\n");
}
}