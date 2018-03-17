@extends('layouts.app')
@section('title','create')
@section('style')
.create table{
	
			text-align: center;
}
@stop
@section('content')
<div class="create">
<form method="POST"  action="{!! route('users.store') !!}" name="formthem">
<input type="hidden"  name ="_token" value="{!! csrf_token() !!}"/>
<table>
	<tr>
				<td>Name:</td>
				<td>	<input type="text" name="ten">	</td>
	</tr>
	<tr>
				<td>MSSV:</td>
				<td>	<input type="text" name="MSSV">	</td>
	</tr>

	
</table>
<button type="submit" > them </button>
</form>
</div>
@stop

