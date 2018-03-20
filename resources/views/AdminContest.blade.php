@extends('layouts.app')
@section('title','AdminContest')
@section('style')
      table
      {
        width: 100%;
        height: 80px;
      }

@stop
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     
            <div class="w3-panel w3-round w3-teal">
              <li> Số Thứ Tự : {!! $questions->id !!} </li>
            </div>
            <div class="w3-panel w3-round w3-teal">
              <li> Nội Dung : {!! $questions->content !!} </li>
            </div>
            <div class="w3-panel w3-round w3-teal">
              <li> Thông Tin Cuộc Thi : {!! $questions->contest_id !!} </li>
            </div>
       

            <!--<table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                   <th>Số Thứ Tự</th>
                   <th>Cách Hiển Thị Đáp Án</th>
                   <th>Nội Dung</th>
                   <th>Là Đáp Án Đúng (0: Sai; 1:Đúng)</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $k=0 ?>
                  @foreach($answers as $answer)
                    <?php $k++ ?>
                    <tr>
                    <td> {!!$k!!}  </td>
                    <td>{!! $answer->abcd !!}</td>
                    <td>{!! $answer->content !!}</td>
                    <td>{!! $answer->correct !!}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>  -->  
    
    <table class="table table-bordered table-hover table-condensed" style="margin-top: 15px; background: white;">
      <thead>
        <tr>
         <th width="7%" class="sorting_asc">ID</th>
         <th>Content</th>
          <th width="10%">Contest_ID</th>
          <th width="20%" colspan="2">Action</th>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@stop