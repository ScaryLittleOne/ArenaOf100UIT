@extends('layouts.app')
@section('title','AdminContest')
@section('style')

@stop
@section('content')

    <table class="table table-bordered table-hover table-condensed" style="margin-top: 15px; background: white;">
      <thead>
<div class="dropdown mb-4">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Quản trị viên
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="/users">Quản lí sinh viên</a>
  <a class="dropdown-item" href="/questions" > Quản lí đề thi </a>
  <!-- thêm thẻ menu vào đây -->

</div>
</div>
   <div class="form-group" style="color: white">
        {!! Form::label('contest_id', 'Contest_ID', ['class'=>'control-label col-md-4']) !!}
        <div class="col-md-4">
          {{ Form::select('correct', [
          '1' => '1',
          '2' => '2']
          ) }}
        </div>
      </div>
    {!! Form::open(['method'=>'POST', 'route'=>['/admincontest']]) !!}
              <input class="form-control" name="id" type="hidden" value='contest_id' >
              {!! Form::submit('Chọn lần thi', ['class'=>'btn btn-success', 'onclick'=>'return confirm("Bạn có muốn chọn lần thi này?")']) !!}
              {!! Form::close() !!}
  <!--$questioncurrent->content; -->
  <div class="w3-panel w3-round w3-teal">
    <li> Số Thứ Tự : {!! $questionc->id!!} </li>
  </div>
  <div class="w3-panel w3-round w3-teal">
    <li> Nội Dung : {!! $questionc->content !!} </li>
  </div>
  <div class="w3-panel w3-round w3-teal">
    <li> Thông Tin Cuộc Thi : {!! $contest->id !!} </li>
  </div>
  <!-- -->
  <div id="row">
    <div class="col-14">
    <table class="table table-striped table-light">
      <thead class="thead-light">
        <tr>
         <th width="4%" height="4%">STT</th>
         <th width="40%" height="40%">Nội dung câu hỏi</th>
          <th width="10%" height="10%">Mã lần thi</th>
          <th width="30%" colspan="2">Thao tác</th>
        </tr>
      </thead>
      <tbody>
        @foreach($questions as $question)
          <tr>
          <td>{!! $question->id !!}</td>
          <td>{!! $question->content !!}</td>
          <td>{!! $question->contest_id !!}</td>
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
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@stop