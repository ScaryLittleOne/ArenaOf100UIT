<?php


namespace App\Http\Controllers;
use DB;
use App\Question;
use App\Questions_answer;       /// Dung de ket hop Them cau hoi + dap an luon
use Illuminate\Http\Request;

class question_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $question = Question::all();
        return view('question.list',compact('question'));//['questions' => Question::all()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "Đây là TRANG THÊM CÂU HỎI";
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    
    public function show(Question $id){
        
        $question = Question::findOrFail($id->id);

        $answers = DB::table('questions_answers')->where('question_id','=',$id->id)->get();
  
        return view('question.show',compact('question'),compact('answers'));//['question' => Question::findOrFail($id)]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
        echo "Đây là TRANG SỬA CÂU HỎI";
        return view('question.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
        $question = Question::find($id);
        $question->delete();
        return redirect('question');
    }
}
