@extends('layouts.app')
@section('title','List questions')
@section('style')
      table
      {
        width: 100%;
        height: 80px;
      }

@stop
@section('content')


    <a href="{{ route('questions.create') }}" class="btn btn-primary">Add new</a>
    <table class="table table-bordered table-hover table-condensed" style="margin-top: 15px;">
      <thead>
        <tr>
         <th width="7%" class="sorting_asc">ID</th>
         <th>Content</th>
          <th width="10%">Contest_ID</th>
          <th width="20%" colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($questions as $question)
          <tr>
          <td>{!! $question->id !!}</td>
          <td>{!! $question->content !!}</td>
          <td>{!! $question->contest_id !!}</td>
          <td>
              {!! Form::open(['method'=>'POST', 'route'=>['/admincontest']]) !!}
              <input class="form-control" name="id" type="hidden" value="{{ $question->id }}" >
              {!! Form::submit('Câu tiếp theo', ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Bạn có muốn chọn câu làm câu tiếp theo?")']) !!}
              {!! Form::close() !!}
          </td>
          </tr>
        @endforeach
      </tbody>
    </table> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@stop