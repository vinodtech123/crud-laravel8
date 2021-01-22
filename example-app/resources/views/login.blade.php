<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
  @if(session()->has('msg'))
  <div class="alert alert-success">
      {{ session()->get('msg') }}
  </div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<h1 align='center'>Welcome to login page</h1>

<div class="container">

<form method="post" action="{{ route('log')}}">
@csrf
  <div class="form-group" >
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name" style="width:50%;">
  </div>
  <br>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="enter password" name="password" style="width:50%;">
  </div>
 
  <br>
    
  <button type="submit" class="btn btn-primary">Log In</button>
  <br><br>
  <a href="http://127.0.0.1:8000/">Create a new Account</a>
</form>






</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>