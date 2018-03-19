@extends('layouts.app')
@section('title','Create questions')

@section('content')
    {!! Form::open(['url' => 'questions']) !!}
      <div class="form-group">
        {!! Form::label('content', 'Content', ['class'=>'control-label col-md-2']) !!}
        <div class="col-md-10">
          {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        </div>
      </div>
  
      <div class="form-group">
        {!! Form::label('contest_id', 'Contest_ID', ['class'=>'control-label col-md-1']) !!}
        <div class="col-md-1">
          {!! Form::text('contest_id', null, ['class' => 'form-control']) !!}
          <!--{!! $errors->has('contest_id')?$errors->first('contest_id'):'' !!}-->
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('content_A', 'Answer A', ['class'=>'control-label col-md-1']) !!}
        <div class="col-md-4">
          {!! Form::text('content_A', null, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('content_B', 'Answer B', ['class'=>'control-label col-md-1']) !!}
        <div class="col-md-4">
          {!! Form::text('content_B', null, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('content_C', 'Answer C', ['class'=>'control-label col-md-1']) !!}
        <div class="col-md-4">
          {!! Form::text('content_C', null, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('content_D', 'Answer D', ['class'=>'control-label col-md-1']) !!}
        <div class="col-md-4">
          {!! Form::text('content_D', null, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('correct', 'Correct Answer', ['class'=>'control-label col-md-4']) !!}
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
          {{ Form::submit('Submit', ['class' => 'btn  btn-primary form-control']) }}
        </div>
      </div>
    {!! Form::close() !!}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@stop