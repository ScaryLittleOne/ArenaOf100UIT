@extends('layouts.app')
@section('title','Lịch Sử Cuộc Thi')
@section('content')
@foreach($data as $it)
  <div class="col-3 btn btn-primary">
      {!!$it!!}
  </div>
@endforeach
@endsection   
