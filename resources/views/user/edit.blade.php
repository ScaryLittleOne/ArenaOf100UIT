@extends('layouts.app')
@section('title','Chỉnh sửa')

<!-- 
@section('name')

@stop
!-->
@section('style')

@stop
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
<center>
{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {!! Form::label('username', 'Mã Số Sinh Viên', ['class'=>'control-label col-md-2']) !!}
        <div class="col-md-4">
          {!! Form::text('username', null, ['class' => 'form-control']) !!}
        </div>

      </div>

   {{ Form::submit('Chỉnh Sửa', array('class' => 'btn btn-primary')) }}
   

{{ Form::close() }}
</center>
@stop
