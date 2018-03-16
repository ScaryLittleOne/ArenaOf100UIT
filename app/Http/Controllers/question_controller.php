<?php


namespace App\Http\Controllers;

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
    public function index()
    {
        echo "Đây là DANH SÁCH CÁC CÂU HỎI";
        return view('question.list',['questions' => Question::all()]);

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
    public function show(Question $id)
    {
        echo "Trang Này Show Cụ Thể Câu Hỏi Nè ";
        //$question = Question::all(); 
        $question = Question::findOrFail($id);
        //$answers = Questions_answer::findOrFail($id);
        //$answers = Questions_answer::all();
        $answers = \App\Questions_answer::with('question')->get();
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
    }
}
