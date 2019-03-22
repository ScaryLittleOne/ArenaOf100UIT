@extends('layouts.app')
@section('title','Danh Sách Câu Hỏi')
@section('style')
@stop
@section('content')
<div class="dropdown mb-4">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Quản Trị Viên
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('questions.create') }}">Thêm Câu Hỏi</a>
            <a class="dropdown-item" href="{{route('users.create')}}">Thêm Sinh Viên</a>
            <a class="dropdown-item" href="{{url('/questions')}}">Quản Lí Đề Thi</a>
            <a class="dropdown-item" href="{{url('/users')}}" > Quản Lí Sinh Viên </a>
        </div>
</div>
    {{ Form::model($question, array('route' => array('questions.update', $question->id), 'method' => 'PUT')) }} 
    <div class="form-group" style="color: white">
        {!! Form::label('content', 'Content', ['class'=>'control-label col-md-2']) !!}
        <div class="col-md-10">
          {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        </div>
      </div>
  
     <!-- <div class="form-group">
        {!! Form::label('contest_id', 'Contest_ID', ['class'=>'control-label col-md-1']) !!}
        <div class="col-md-1">
          {!! Form::text('contest_id', null, ['class' => 'form-control']) !!}
        </div>
      </div>-->

        <!-- Answers -->
      @foreach($answers as $answer)
        <div class="form-group" style="color: white">
          <label for="content[]" class="control-label col-md-1">Answer {{ $answer->abcd}}</label>
          <div class="col-md-4">
            <input class="form-control" name="ids[]" type="hidden" id="content_{{$answer->abcd}}" value="{{ $answer->id }}">
            <input class="form-control" name="answers[]" type="text" id="content_{{$answer->abcd}}" value="{{ $answer->content }}">
          </div>
        </div>
    
      @endforeach

      <div class="form-group" style="color: white">
        {!! Form::label('correct', 'Correct Answer', ['class'=>'control-label col-md-4']) !!}
        <div class="col-md-4">
          <!--{!! Form::text('correct', null, ['class' => 'form-control']) !!}-->
          {{ Form::select('correct', [
          'A' => 'A',
          'B' => 'B',
          'C' => 'C',
          'D' => 'D']
          ) }}
        </div>
      </div>
    <div class="form-group">
        <div class="col-md-4">
          {{ Form::submit('Chỉnh Sửa Câu Hỏi', ['class' => 'btn  btn-primary form-control']) }}
        </div>
      </div>
    {{ Form::close() }}
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@stop