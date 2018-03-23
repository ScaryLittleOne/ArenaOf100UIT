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
      <tr>
        <td>A</td>
        <td>{!!$A!!}</td>
      </tr>
      <tr>
        <td>B</td>
        <td>{!!$B!!}</td>
      </tr>
      <tr>
        <td>C</td>
        <td>{!!$C!!}</td>
      </tr>
      <tr>
        <td>D</td>
        <td>{!!$D!!}</td>
      </tr>
    </tbody>
  </table>
  <br>
  <table class="table table-striped table-bordered" style="margin-top: 15px; background: white;">
    <thead>
      <tr>
        <th>Số người chơi còn lại</th>
        <th>Số người chơi không trả lời</th>
      </tr>
    </thead>
    <tbody>  
        <td>{!!$still_active!!}</td>
          <td>{!!$still_active - ($A + $B + $C + $D)!!}</td>
     </tbody>
  </table>   
</div>
<script src="{{ asset('js/app.js') }}">
    </script>
@stop