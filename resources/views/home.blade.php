<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | Profile Form</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
      body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 500px;
      }
      .card {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 300px;
        padding: 50px 0;
      }
      .card-img-top {
        width: 200px;
        height: 200px;
        border-radius: 50%;
      }
    </style>
  </head>

  <body>
    <div class="card">
      <img src="{{asset('storage/'.$user->photo)}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$user->name}}</h5>
        <p class="card-text">{{$user->email}}</p>
        <a class="btn btn-warning">Logout</a>
      </div>
    </div>
  </body>

</html>