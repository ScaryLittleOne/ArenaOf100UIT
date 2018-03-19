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
button {
	
			width: 50px;
			background: #0083BF;
			box-shadow: 0px 0px 5px #CBCBCE;
			margin: 10px auto;
			padding: 2px 2px;
			border-radius: 10px; 
}
@stop
@section('content')
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
				<td>Mật khẩu::</td>
				<td>	<input type="text" name="password">	</td>
	</tr>

	
</table>
<button type="submit" > OK </button>
</form>
</div>
</center>
@stop