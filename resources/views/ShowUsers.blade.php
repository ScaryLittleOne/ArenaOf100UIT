@extends('layouts.app')
@section('title','Lịch Sử Cuộc Thi')
@section('content')
<div class="dropdown mb-4">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Quản Trị Viên
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{url('/showusers')}}">Thống kê người chơi</a>
            <a class="dropdown-item" href="{{ route('questions.create') }}">Thêm Câu Hỏi</a>
            <a class="dropdown-item" href="{{route('users.create')}}">Thêm Sinh Viên</a>
            <a class="dropdown-item" href="{{url('/questions')}}">Quản Lí Đề Thi</a>
            <a class="dropdown-item" href="{{url('/users')}}" > Quản Lí Sinh Viên </a>
        </div>
</div>
@foreach($data as $it)
  <div class="col-1 btn btn-light btn-lg mr-1 mb-1">
      {!!$it!!}
  </div>
@endforeach
@endsection   
