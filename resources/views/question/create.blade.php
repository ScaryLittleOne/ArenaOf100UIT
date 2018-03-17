<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>VIEW: Hello, world CREATE!</title>
  </head>
  <style>
    input[type=text], select {
     width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
  <body>
    <h1>VIEW: Hello, world CREATE!</h1>
    <h2>Add new question</h2>
    <form action="/action_page.php">
      <label for="ID">ID</label>
      <input type="text" id="ID" placeholder="ID..">

      <label for="Content">Content</label>
      <input type="text" id="Content" placeholder="Content..">

      <label for="Answer_A">Answer A</label>
      <input type="text" id="Answer A" placeholder="Answer A..">

      <label for="Answer_B">Answer B</label>
      <input type="text" id="Answer B" placeholder="Answer B..">

      <label for="Answer_C">Answer C</label>
      <input type="text" id="Answer C" placeholder="Answer C..">

      <label for="Answer_D">Answer D</label>
      <input type="text" id="Answer D" placeholder="Answer D..">

      <label for="Correct_Answer">Correct Answer</label>
      <select id="Correct_Answer">
        <option value="1">A</option>
        <option value="2">B</option>
        <option value="3">C</option>
        <option value="4">D</option>
      </select>

      <a href="" class = "btn btn-primary">Save</a>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>