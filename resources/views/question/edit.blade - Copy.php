<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit Question!</title>
  </head>
  <style>
    input[type=text], select {
     width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
  <body>
    {{ Form::model($question, array('route' => array('questions.update', $question->id), 'method' => 'PUT')) }} 

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
        </div>
      </div>
      
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
          {{ Form::submit('Edit the question', ['class' => 'btn  btn-primary form-control']) }}
        </div>
      </div>
    {{ Form::close() }}
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>