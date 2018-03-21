<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Carbon\Carbon;
//namespace Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Question;
//use App\Contest;
//use DB;
use DateTime;
use App\Questions_answer;
use App\Contest;
use App\User;
use App\History;
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
        //$contest = Contest::find();
        //$contt = Contest::all();
        //$contest = new Contest;
        $cont = DB::table('contests')->where('active','=',true)->first();
        $questionc = DB::table('questions')->where('id','=',$cont->currentquestion_id)->first();
        //return view('AdminContest',compact('questions'),compact('questionc'), compact('cont'));
    	return view('AdminContest',['questions' => $questions, 'questionc' => $questionc, 'cont' => $cont]);
    }

    /*public function change(Request $request, Contest $contest){
    	var_dump($request->id);
    	///Doi cau hoi hien tai trong table contest
    	///
        //$contest = new Contest;
        //$contest = Contest::find($request['contest_id']);
        $contest_id = $request['contest_id'];
        $contest->active = true;
        $contest->currentquestion_id = $request->id;
    	return $this->index();
    	$questions = Question::all();
        $questioncurrent = DB::table('contests')->where('active','=',true)->get();
    	return view('AdminContest',compact('questions'),compact('questioncurrent'));
    }*/

    public function change(Request $request)//Request $request){//Chua Test
    {
    //	var_dump($request->id);
    	///Doi cau hoi hien tai trong table contest
    	///
        /*$Inc = Contest::where('active', 1)->update(['currentquestion_id'=>DB::raw('currentquestion_id+1')]);//Cau Hoi Hien Tai++
        if (is_null($Inc) == true){ // Pop Up Message Pls Push Active a Contest
        }*/
        //$cont = new Contest;
        $cont = DB::table('contests')->where('active','=',true)->update(['currentquestion_id'=> $request->id]);
        //$now = Carbon\Carbon::now();
     //   $now->createFromFormat('d/m/Y','21/03/2018'); 
        //var_dump($now); 
        //return;
        $now = now();
        $cont = DB::table('contests')->where('active','=',true)->update(['startcurrentquestion'=> $now]);
        //$cont->currentquestion_id = $request->id;
        //$cont -> save();
        return $this->index();
    }
    public function changecontest(Request $request)
    {
        $cont = DB::table('contests')->where('active','=',true)->update(['active'=> false]);
        $cont = DB::table('contests')->where('id','=',$request['contest_id'])->update(['active'=> true]);
        /*$contt = Contest::all();
        foreach($contt as $cont)
        {
            if ($conts->id == $contt->id)
            {
                $cont -> active = 1;
                $cont -> save();
            } else
            {
                 $cont -> active = 0;
                 $cont -> save();
            }
           
        }*/
        return redirect('admincontest');
    } 

    public function check_answer(Request $request){ // Kiem Tra Cau Tra Loi Va Kick User Khi TL sai (Unfinished)
        $user = User::select('users.*')->where('id','=','$request->id')->get();
        $user->active = 0;
        $user->save();
    }

    public function create_contest(){ //Tao Contest
        $NewCon = new Contest;
        $NewCon ->currentquestion_id = 1;
        $NewCon ->active = 0;
        $NewCon ->save();
    }

    public function destroy_contest(Contest $cont){//Xoa Contest
        $cont -> destroy ();
    }

    /*public function activate_contest(Contest $cont){
        $cont -> active = 1;
        $cont -> save();
    }*/

    /*public function deactivate_contest(){
        $contt = Contest::all();
        foreach($contt as $cont) {
        {
            $cont -> active = 0;
            $cont -> save();
        }}
        return $this->changecontest();
    }*/

    public function show_history(){//Chuc Nang Cua Admin ->Show Toan Bo Lich Su Thi Dau
        $MergeHistory = History::select('histories.*','users.username','questions.content as QT','questions_answers.*')  //Lay Duoc Cau Hoi Hien Tai Dua Tren Contest_CQ va Contest.Active
            ->join('users','user_id','=','users.id')
            ->join('questions','question_id','=','questions.id')
            ->join('questions_answers','questions_answer_id','=','questions_answers.id')
            ->groupBy('histories.id')
            ->get();
        //$MergeHistory = History::all();
        return view('ShowHistory',compact('MergeHistory') );
    }
}
