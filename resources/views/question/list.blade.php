<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
      table
      {
        width: 100%;
        height: 150px;
      }
   </style>

    <title>VIEW: Hello, world LIST!</title>
  </head>
  <body>
    <h1>VIEW: Hello, world LIST!</h1>
    <a href="questions/create" class="btn btn-primary">Add new</a>
    <table class="table table-bordered table-hover table-condensed" style="margin-top: 15px;">
      <thead>
        <tr>
         <th width="7%" class="sorting_asc">ID</th>
         <th>Content</th>
          <th width="10%">Contest_ID</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($question as $question)
          <tr>
          <td>{!! $question->id !!}</td>
          <td>{!! $question->content !!}</td>
          <td>{!! $question->contest_id !!}</td>
          <td>
            <a href="{{ route('questions.show', $question->id) }}" class = "btn btn-info">Info</a>
            <a href="{{ route('questions.edit', $question->id) }}" class = "btn btn-success">Edit</a>
            <a href="{{ route('questions.destroy', $question->id) }}" class = "btn btn-danger">Delete</a>
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
  </body>
</html>