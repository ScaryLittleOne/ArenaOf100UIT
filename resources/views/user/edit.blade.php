@extends('layouts.app')
@section('title','Chỉnh sửa')

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

   {{ Form::submit('Chỉnh sửa', array('class' => 'btn btn-primary')) }}
   

{{ Form::close() }}
</center>
@stop
