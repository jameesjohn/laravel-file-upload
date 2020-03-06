<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register | Profile Form</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Styles -->
    <style>
      .form-box{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        margin-bottom: 10px
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <a class="navbar-brand" href="#">Profile Form</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Register <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div class="container">
      <h1>Register</h1>
      <section class="form-box">
        <form action="{{route('register')}}" method="POST" class="col-md-5" enctype="multipart/form-data" required>
          @csrf
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name"  class="form-control" required>
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="password">
              Password
            </label>
            <input type="password" name="password" id="password" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="photo">Attach a photograph</label>
            <input type="file" name="photo" id="photo" accept="image/*" class="form-control-file" required>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
          </div>
        </form>
      </section>
    </div>
  </body>
</html>