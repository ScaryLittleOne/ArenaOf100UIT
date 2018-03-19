<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Question's Details</title>
    
  </head>
  <body>
 @extends('layouts.app')
<!--Co Gi Xoa Cai Nay Di. Day La Cach Hien Thi Ne .Tu Day -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Chi Tiết Câu Hỏi Và Đáp Án') }}</div>
   <!--Toi Day -->

            <?php /*<table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                 <th>Số Thứ Tự</th>
                 <th>Nội Dung</th>
                  <th>Thông Tin Cuộc Thi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($question as $question)
                  <td>{!! $question->id !!}</td>
                  <td>{!! $question->content !!}</td>
                  <td>{!! $question->contest_id !!}</td>

                @endforeach
              </tbody>
            </table> */?>

           <?php /* @foreach($question as $question)
                <div>
                  <li> Số Thứ Tự : {!! $question->id !!} </li>
                  <li> Nội Dung : {!! $question->content !!} </li>
                  <li> Thông Tin Cuộc Thi : {!! $question->contest_id !!} </li>
                </div>
            @endforeach */?>

            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     
            <div class="w3-panel w3-round w3-teal">
              <li> Số Thứ Tự : {!! $question->id !!} </li>
            </div>
            <div class="w3-panel w3-round w3-teal">
              <li> Nội Dung : {!! $question->content !!} </li>
            </div>
            <div class="w3-panel w3-round w3-teal">
              <li> Thông Tin Cuộc Thi : {!! $question->contest_id !!} </li>
            </div>
       

            <table class="table table-striped table-bordered table-hover">
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
              </table>
            </div>
          <!-- O day Nua-->
          </div>
          </div>
        </div>
    </div>
</div>
@endsection
<!--Toi Day-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>