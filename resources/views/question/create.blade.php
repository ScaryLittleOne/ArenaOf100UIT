@extends('layouts.app')
@section('title','Tạo Đề Thi')

@section('content')
<div class="dropdown mb-4">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Quản Trị Viên
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="{{url('/questions')}}" > Quản Lí Đề Thi </a>
  <a class="dropdown-item" href="{{url('/users')}}">Quản Lí Sinh Viên</a>
  
</div>
</div>
    {!! Form::open(['url' => 'questions']) !!}
      <div class="form-group" style="color: white">
        {!! Form::label('content', 'Nội Dung Câu Hỏi', ['class'=>'control-label col-md-3']) !!}
        <div class="col-md-10">
          {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        </div>
      </div>
  
       <!--<div class="form-group" style="color: white">
       {!! Form::label('contest_id', 'Mã lần thi', ['class'=>'control-label col-md-1']) !!}
        <div class="col-md-10">
          {!! Form::text('contest_id', null, ['class' => 'form-control']) !!}
          {!! $errors->has('contest_id')?$errors->first('contest_id'):'' !!}-->
      <!--<div class="form-group" style="color: white">
        {!! Form::label('contest_id', 'Mã câu hỏi', ['class'=>'control-label col-md-1']) !!}
        <div class="col-md-1">
           {!! Form::text('contest_id', null, ['class' => 'form-control']) !!}
        -{!! $errors->has('contest_id')?$errors->first('contest_id'):'' !!}
     </div>
      </div>-->

      <div class="form-group" style="color: white">
        {!! Form::label('content_A', 'Đáp án A', ['class'=>'control-label col-md-1']) !!}
        <div class="col-md-4">
          {!! Form::text('content_A', null, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group" style="color: white">
        {!! Form::label('content_B', 'Đáp án B', ['class'=>'control-label col-md-1']) !!}
        <div class="col-md-4">
          {!! Form::text('content_B', null, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group" style="color: white">
        {!! Form::label('content_C', 'Đáp án C', ['class'=>'control-label col-md-1']) !!}
        <div class="col-md-4">
          {!! Form::text('content_C', null, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group" style="color: white">
        {!! Form::label('content_D', 'Đáp án D', ['class'=>'control-label col-md-1']) !!}
        <div class="col-md-4">
          {!! Form::text('content_D', null, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group" style="color: white">
        {!! Form::label('correct', 'Đáp án đúng', ['class'=>'control-label col-md-4']) !!}
        <div class="col-md-4">
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
          {{ Form::submit('Hoàn thành', ['class' => 'btn  btn-primary form-control']) }}
        </div>
      </div>
    {!! Form::close() !!}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@stop