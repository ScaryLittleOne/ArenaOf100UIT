@extends('layouts.app')
@section('title','Quyền admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Danh sách lệnh</div><br>
                <div class="card" style="width: 100%;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><a  href="/users" > Quản lí user </a></li>
    <li class="list-group-item"><a  href="/questions" > Quản lí đề thi </a></li>
    <li class="list-group-item"><a  href="/contest" > Vào đấu trường </a></li>
  </ul>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
