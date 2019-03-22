@extends('layouts.app')
@section('title','Lịch Sử Cuộc Thi')
@section('content')
<?php
foreach($data as $it)
echo $it;
?>
@endsection   
