<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
   

   
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
                <h2 align="center">Edit user</h2>
            </div>
            
        </div>
   
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="container">
        <form action="{{ route('user.update',$user->id) }}" method="POST">
            @csrf
            @method('PUT')
       
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name" style="width:50%;">
                        <br>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>mobile</strong>
                        <input type="text" name="mobile" value="{{ $user->mobile }}" class="form-control" placeholder="Name" style="width:50%;">
                        <br>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="text-align: left!important;">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
       
        </form>
    </div>
  
   
