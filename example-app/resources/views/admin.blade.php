{{-- <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    @csrf
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Dashboard</a>
        <a href="/logout">Logout</a>
        
        
        
        
        
        
        <h5 align='center'>hello,{{ $username }} </h5>
        
        
        
      </form>
    </div>
  </div>
</nav>
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col" style="text-align: center;">name</th>
        <th scope="col" style="text-align: center;">mobile</th>
        <th scope="col" style="text-align: center;">dob</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($name as $user)
      
      <tr>
        
        <td align="center">{{$user->name}}</td>
        <td align="center">{{$user->mobile}}</td>
        <td align="center">{{$user->dob}}</td>
      </tr>
      
      @endforeach
      
    </tbody>
  </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{asset("adminlte/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback")}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("adminlte/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset("adminlte/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css")}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset("adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset("adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset("adminlte/plugins/jqvmap/jqvmap.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("adminlte/dist/css/adminlte.min.css")}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset("adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href= "{{asset("adminlte/plugins/daterangepicker/daterangepicker.css")}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset("adminlte/plugins/summernote/summernote-bs4.min.css")}}">
  <!-- custom css -->
  <link rel="stylesheet" href="{{asset("style.css")}}">
  <!-- bootstrap 4 cdn -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- icons-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- cdn -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- cdn data table -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed"><!-- Brand Logo -->
  @if(session()->has('success'))
  <div class="alert alert-success text-center">
    {{ session()->get('success') }}
  </div>
  @endif
  <div class="wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>
      
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        
        
        
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge"> {{ $userCount }}</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/logout" role="button">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
          </a>
          
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
    
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      
      
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset("adminlte/dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">hello,{{ $username }}</a>
          </div>
        </div>
        
        <!-- SidebarSearch Form -->
        
        <!-- edit model start here -->
        
        <div class="modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModallabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Edit user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              <form action="/user" method="POST" id="editForm">
                
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                
                <div class="modal-body">
                  
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="enter your name">
                  </div>
                  
                  <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="enter your Mobile number">
                  </div>
                  
                </div>
                
                
                
                <div class="modal-footer">
                  
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
                
              </form>
              
            </div>
          </div>
        </div>
        
        <!-- edit model start end -->
        
        
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
              
              
              <li class="nav-header">LABELS</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">Important</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Warning</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Informational</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            
            <!-- /.row -->
            
            
            
            
            <!-- here starting my table-->
            
            {{-- <table>
              <table border="1px solid black" cellpadding="5" cellspacing="0">
                <tr>
                  <td>s.no</td>
                  <td>name</td>
                  <td>email</td>
                  <td>age</td>
                  <td>password</td>
                  
                </tr>
                
                
                @foreach ($name as $data)
                <tr>
                  <td>{{$data->id}}</td>
                  <td>{{$data->name}}</td>
                  <td>{{$data->email}}</td>
                  <td>{{$data->age}}</td>
                  <td>{{$data->password}}</td>
                </tr>
                @endforeach
                
                
                
                
                
                
                
                
              </table> 
            </table> --}}
            
            <div class="container-xl">
              <div class="table-responsive">
                <div class="table-wrapper">
                  <div class="table-title">
                    <div class="row">
                      <div class="col-sm-5">
                        <h2>User <b>Management</b></h2>
                      </div>
                      
                    </div>
                  </div>
                  <table id="datatable" class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>s.no</th>
                        <th>Name</th>						
                        <th >Mobile</th>
                        <th>DOB</th>
                        <th>Action</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                      
                      
                      
                      @foreach ($name as $user)
                      
                      <tr>
                        <td>{{$user->id}}</td> 
                        <td>{{$user->name}}</td>
                        <td >{{$user->mobile}}</td>
                        <td>{{$user->dob}}</td>
                        <td style="display: flex;">
                          {{-- <a href="{{ route('user.edit',$user->id)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a> --}}
                          
                          <a href="#" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                          
                          <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                            
                            
                            @csrf
                            @method('DELETE')
                            
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                           
                          </form>
                          
                          
                          
                          
                          
                        </td>
                      </tr>
                      
                      @endforeach
                      
                      
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>     
            
            
            <!-- here ending my table -->
            
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer" align="center">
        <strong>Copyright &copy; 2021 <a href="#">Company.com</a>.</strong>
        All rights reserved.
        
      </footer>
      
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    
    <!-- jQuery--> 
    <script src="{{asset("adminlte/plugins/jquery/jquery.min.js")}}"></script>
    
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset("adminlte/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
    
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    
    <!-- Bootstrap 4 -->
    <script src="{{asset("adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- ChartJS -->
    <script src="{{asset("adminlte/plugins/chart.js/Chart.min.js")}}"></script>
    <!-- Sparkline -->
    
    <script src="{{asset("adminlte/plugins/sparklines/sparkline.js")}}"></script>
    <!-- JQVMap -->
    
    <script src="{{asset("adminlte/plugins/jqvmap/jquery.vmap.min.js")}}"></script>
    
    <script src="{{asset("adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js")}}"></script>
    
    <!-- jQuery Knob Chart -->
    <script src="{{asset("adminlte/plugins/jquery-knob/jquery.knob.min.js")}}"></script>
    <!-- daterangepicker -->
    
    <script src="{{asset("adminlte/plugins/moment/moment.min.js")}}"></script>
    
    <script src="{{asset("adminlte/plugins/daterangepicker/daterangepicker.js")}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    
    <script src="{{asset("adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
    <!-- Summernote -->
    
    <script src="{{asset("adminlte/plugins/summernote/summernote-bs4.min.js")}}"></script>
    <!-- overlayScrollbars -->
    
    <script src="{{asset("adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("adminlte/dist/js/adminlte.js")}}"></script>
    <!-- AdminLTE for demo purposes -->
    
    <script src="{{asset("adminlte/dist/js/demo.js")}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    
    <script src="{{asset("adminlte/dist/js/pages/dashboard.js")}}"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    
    
    <!-- databale js cdn link -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    
    <!-- datatable js2 cdn link -->
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    
    
    
    <script type="text/javascript">
      
      $(document).ready(function() {
        
        // e.preventDefault();
        
        var table = $('#datatable').DataTable();
        
        // start edit record
        
        table.on('click','.edit',function(){
          
          $tr = $(this).closest('tr');
          
          if($($tr).hasClass('child')){
            
            $tr = $tr.prev('.parent');
            
          }
          
          var data = table.row($tr).data();
          console.log(data);
          
          $('#name').val(data[1]);
          $('#mobile').val(data[2]);
          
          $('#editForm').attr('action','/user/'+data[0]);
          $('#editModal').modal('show');
          $('.modal-backdrop').hide();
          
        });
        // end edit record
        
        
        
      });
      
      
    </script>
    
  </body>
  </html>