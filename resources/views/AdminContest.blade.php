@extends('layouts.app')
@section('title','AdminContest')
@section('style')

@stop
@section('content')

  
<div class="dropdown mb-4">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Quản Trị Viên
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="/users">Quản Lí Sinh Viên</a>
  <a class="dropdown-item" href="/questions" > Quản Lí Đề Thi </a>
  </div>
</div>
 <!-- thêm thẻ menu vào đây -->

 {!! Form::open(['method'=>'POST', 'route'=>['/adminchangecontest']]) !!}
   <div class="form-group" style="color: white">
        {!! Form::label('contest_id', 'Chọn Mã Cuộc Thi', ['class'=>'control-label']) !!}
        <div class="">
          {{ Form::select('contest_id', [
          '1' => '1',
          '2' => '2']
          ) }}
        </div>
    </div>
      {!! Form::submit('OK', ['class'=>'btn btn-success', 'onclick'=>'return confirm("Bạn có muốn chọn lần thi này?")']) !!}
  {!! Form::close() !!}
  <br>
  <!--{!! Form::open(['method'=>'POST', 'route'=>['/statistic']]) !!}
  <input class="form-control" name="id" type="hidden" value="{{ $cont->id }}" >
    {!! Form::submit('Thống Kê Đáp Án', ['class'=>'btn btn-info', 'onclick'=>'return confirm("Bạn có muốn xem thống kê đáp án của câu hỏi hiện tại?")']) !!}
  {!! Form::close() !!}-->
  <div class="dropdown mb-4">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Các chức năng
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="/statistic">Thống kê đáp án</a>
  <a class="dropdown-item" href="/history">Xem lịch sử</a>
  </div>
</div>
    

  <!--$questioncurrent->content; -->
  <table class="table table-bordered table-hover table-condensed" style="margin-top: 15px; background: white;">
  <thead>
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8">
  <div class="card">
  <div class="card-header">{{ __('Chi Tiết Câu Hỏi Và Đáp Án') }}</div>
    <li class="list-group-item list-group-item-danger" > Số Thứ Tự : {!! $questionc->id!!} </li>

    <li class="list-group-item list-group-item-primary" > Nội Dung : {!! $questionc->content !!} </li>

    <li class="list-group-item list-group-item-light" > Thông Tin Cuộc Thi : {!! $cont->id !!} </li>
  </div>
  <!-- -->
  <div id="row">
    <div class="col-14">
    <table class="table table-striped table-light">
      <thead class="thead-light">
        <tr>
         <th width="4%" height="4%">STT</th>
         <th width="40%" height="40%">Nội Dung Câu Hỏi</th>
          <th width="10%" height="10%">Mã Lần Thi</th>
          <th width="10%" colspan="2">Thao Tác</th>
        </tr>
      </thead>
      <tbody>
        @foreach($questions as $question)
          <tr>
          <td>{!! $question->id !!}</td>
          <td>{!! $question->content !!}</td>
          <td>{!! $cont->id !!}</td>
          <td>
              {!! Form::open(['method'=>'POST', 'route'=>['/admincontest']]) !!}
              <input class="form-control" name="id" type="hidden" value="{{ $question->id }}" >
              {!! Form::submit('Câu tiếp theo', ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Bạn có muốn chọn câu hỏi này làm câu tiếp theo?")']) !!}
              {!! Form::close() !!}
          </td>
          </tr>
        @endforeach
      </tbody>
    </table> 
</thread>
</table>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@stop