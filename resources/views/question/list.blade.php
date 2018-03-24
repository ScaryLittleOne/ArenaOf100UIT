@extends('layouts.app')
@section('title','Danh Sách Câu Hỏi')
@section('style')
@stop
@section('content')

  <table class="table table-bordered table-hover table-condensed" style="margin-top: 15px; background: white;">
  <thead>
<div class="dropdown mb-4">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Quản Trị Viên
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="{{ route('questions.create') }}">Thêm Câu Hỏi</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="{{url('/users')}}" > Quản Lí Sinh Viên </a>
  <a class="dropdown-item" href="{{url('/admincontest')}}" > Vào Đấu Trường </a>
  
  </div>
</div>

  </thead>
  </table> 
  <div id="row">
    <div class="col-14">
    <table class="table table-striped table-light">
      <thead class="thead-light">
        <tr>
         <th width="4%" height="4%">STT</th>
         <th width="40%" height="40%">Nội Dung Câu Hỏi</th>
          <!--<th width="10%" height="10%">Mã câu hỏi</th>-->

          <th width="30%" colspan="2">Thao Tác</th>
        </tr>
      </thead>
      <tbody>
        @foreach($questions as $question)
          <tr>
          <td>{!! $question->id !!}</td>
          <td>{!! $question->content !!}</td>
          <td>
            <a href="{{ route('questions.show', $question->id) }}" class = "btn btn-info">Hiển Thị Nội Dung</a>
            <a href="{{ route('questions.edit', $question->id) }}" class = "btn btn-success">Chỉnh Sửa</a>
          </td>
          <td>
              {!! Form::open(['method'=>'delete', 'route'=>['questions.destroy', $question->id]]) !!}
              {!! Form::submit('Xóa', ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Bạn muốn xóa câu hỏi này?")']) !!}
              {!! Form::close() !!}
          </td>
          </tr>
        @endforeach
      </tbody>
    </table> 
  </div> </div>

  <script src="{{ asset('js/app.js') }}"></script>
@stop