<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

<h1 align="center">Registration form</h1>



<div class = "container">
<form method="post" action="{{ route('submit')}}">
@csrf
  <div class="form-group" >
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name" style="width:50%;">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Mobile</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="enter mobile" name="mobile" style="width:50%;">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="enter password" name="password" style="width:50%;">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Dob</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="dob" style="width:50%;">
  </div>
  <br>
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
