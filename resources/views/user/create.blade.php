@extends('layouts.app')
@section('title','Create')
@section('style')
.create {
			margin :5% auto;
			text-align: center;
			padding: 5px 20px;
			background: white;
			display: inline-block;
			border-radius: 20px; 

}
.create table td input{

			margin: 10px auto;
}

@stop
@section('content')
<div class="dropdown mb-4">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Quản trị viên
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="{{url('/users')}}">Quản Lí Sinh Viên</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="{{url('/questions')}}" > Quản Lí Đề Thi </a>
  <a class="dropdown-item" href="{{url('/admincontest')}}" > Vào Đấu Trường </a>
  
</div>
</div>
<center>
<div class="create">
<form method="POST"  action="{!! route('users.store') !!}" name="formthem">
<input type="hidden"  name ="_token" value="{!! csrf_token() !!}"/>
<table>
	<tr>
				<td>Mã số sinh viên:</td>
				<td>	<input type="text" name="MSSV">	</td>
	</tr>
	<tr>
				<td>Mật khẩu:</td>
				<td>	<input type="text" name="password">	</td>
	</tr>

	
</table>
<button class="btn btn-primary"   type="submit" > OK </button>
</form>
</div>
</center>
<script src="{{ asset('js/app.js') }}">
    </script>
@stop