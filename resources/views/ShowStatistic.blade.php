@extends('layouts.app')
@section('title','Thống Kê Đáp Án')
@section('content')

<div class="dropdown mb-4">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Quản Trị Viên
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="/history" > Lịch Sử Trả Lời Đáp Án </a>
  <a class="dropdown-item" href="/admincontest" > Vào Đấu Trường </a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="/users">Quản Lí Sinh Viên</a>
  <a class="dropdown-item" href="/questions" > Quản Lí Đề Thi </a>
</div>
</div>
<div class="container">
  <h2 style="color: white">Thống Kê Kết Quả Câu Hỏi</h2>
  <table class="table table-striped table-bordered" style="margin-top: 15px; background: white;">
    <thead>
      <tr>
        <th>Câu Trả Lời</th>
        <th>Số Người Chọn</th>
      </tr>
    </thead>
    <tbody>   
      <tr class="success">
        <td>A</td>
        <td>{!!$A!!}</td>
      </tr>
      <tr class="danger">
        <td>B</td>
        <td>{!!$B!!}</td>
      </tr>
      <tr class="info">
        <td>C</td>
        <td>{!!$C!!}</td>
      </tr>
      <tr class="warning">
        <td>D</td>
        <td>{!!$D!!}</td>
      </tr>
    </tbody>
  </table>
</div>
<script src="{{ asset('js/app.js') }}">
    </script>
@stop