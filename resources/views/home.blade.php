@extends('layouts.app')
@section('title','Admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Danh sách lệnh</div><br>
                <div class="card" style="width: 100%;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><a target="_blank" href="{{url('/users')}}" > Quản Lí User </a></li>
    <li class="list-group-item"><a target="_blank" href="{{url('/questions')}}" > Quản Lí Đề Thi </a></li>
  </ul>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
