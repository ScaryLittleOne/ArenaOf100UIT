@extends('layouts.app')
@section('title','Edit')

<!-- 
@section('name')

@stop
!-->
@section('style')

@stop
@section('content')

<center>
{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {!! Form::label('username', 'Mã số sinh viên', ['class'=>'control-label col-md-2']) !!}
        <div class="col-md-4">
          {!! Form::text('username', null, ['class' => 'form-control']) !!}
        </div>

      </div>
      <div class="form-group">
        {!! Form::label('password', 'Mật khẩu', ['class'=>'control-label col-md-1']) !!}
        <div class="col-md-4">
          {!! Form::text('password', null, ['class' => 'form-control']) !!}
          <!--{!! $errors->has('contest_id')?$errors->first('contest_id'):'' !!}-->
        </div>
      </div>

   {{ Form::submit('Chỉnh sửa', array('class' => 'btn btn-primary')) }}
   

{{ Form::close() }}
</center>
@stop
