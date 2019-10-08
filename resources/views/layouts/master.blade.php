<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>GMS</title>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GMS</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
          <li class="{{ setactive('subjects') }}"><a  href='/subjects'>Subjects</a></li>
          <li class="{{ setactive('strands') }}"><a href="/strands">Strands</a></li>
          <li class="{{ setactive('teachers') }}"><a href="/teachers">Teachers</a></li>
          <li class="{{ setactive('sections') }}"><a href="/sections">Sections</a></li>
          <li class="{{ setactive('subject-strands') }}"><a href="/subject-strands">Subject Strands</a></li>
          <li class="{{ setactive('teacher_load') }}"><a href="/teacherload">Teacher Load</a></li>     
        </ul>
          <ul><a class="btn btn-primary" style ="float:right" href="./logout">Logout</a></ul>
      </li>
   
   
   
  </div>
</nav>
    @yield('content')
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>