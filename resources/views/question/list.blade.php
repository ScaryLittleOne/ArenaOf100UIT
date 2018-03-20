@extends('layouts.app')
@section('title','Danh sách câu hỏi')
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
         <th width="7%" class="sorting_asc">STT</th>
         <th>Nội dung câu hỏi</th>
          <th width="10%">Mã câu hỏi</th>
          <th width="30%" colspan="2">Thao tác</th>
        </tr>
      </thead>
      <tbody>
        @foreach($question as $question)
          <tr>
          <td>{!! $question->id !!}</td>
          <td>{!! $question->content !!}</td>
          <td>{!! $question->contest_id !!}</td>
          <td>
            <a href="{{ route('questions.show', $question->id) }}" class = "btn btn-info">Hiển thị nội dung</a>
            <a href="{{ route('questions.edit', $question->id) }}" class = "btn btn-success">Chỉnh sửa</a>
          </td>
          <td>
              {!! Form::open(['method'=>'delete', 'route'=>['questions.destroy', $question->id]]) !!}
              {!! Form::submit('Delete', ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Bạn muốn xóa câu hỏi này?")']) !!}
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