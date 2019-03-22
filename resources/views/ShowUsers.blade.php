@extends('layouts.app')
@section('title','Lịch Sử Cuộc Thi')
@section('content')
@foreach($data as $it)
  <div class="col-1 btn btn-light btn-lg mr-1 mb-1">
      {!!$it!!}
  </div>
@endforeach
@endsection   
