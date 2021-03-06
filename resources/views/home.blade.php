<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.3/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.3/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.3/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.3/dist/css/AdminLTE.min.css')}}">
 
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.3/dist/css/skins/skin-blue.min.css')}}">
 
</head>

<body class="hold-transition skin-blue sidebar-mini">


  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>KN</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pendaftaran</b>PKN</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">
           @guest
                             <li color='red'> <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        


                           <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

     
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            
              <span class="label label-success"></span>
            </a>
 
             
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                 
                    <a href="#">
                      <div class="pull-left">
                    
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                      
                      </h4>
                  
                    </a>
                  </li>
               
                </ul>
             
              </li>
            
            </ul>
          </li>
     
              <span class="label label-warning"></span>
            </a>
            <ul class="dropdown-menu">
              
             
                  <!-- end notification -->
                </ul>
              </li>
           
            </ul>
          </li>
        
              <span class="label label-danger"></span>
            </a>
            <ul class="dropdown-menu">
              
              <li>
                <!-- Inner menu: contains the tasks -->
                
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                   
                  
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                   
                        
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              
            </ul>
          </li>
       
            
              
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                

                <p>
                
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
        
                  </div>
                  <div class="col-xs-4 text-center">
             
                  </div>
                
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
          
                </div>
                <div class="pull-right">
          
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="mid image">
          <img src="{{asset('AdminLTE-2.4.3/dist/img/Logo_umm.png')}}" class="img-circle" alt="User Image" >
          <label style="text-decoration-color: white">UMM</label>
        </div>
        <div class="pull-left info">
         
          <!-- Status -->
         
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

       <ul class="sidebar-menu" data-widget="tree">
       
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{url('/home')}}"><i class="fa fa-link"></i> <span>Daftar</span></a></li>
          

          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Selamat Datang
        <small>Di Website Resmi Pendaftara PKN</small>
      </h1>

   
    <!-- Main content -->
    <section class="content container-fluid">

      @yield('content')

    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
       
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
             

              <div class="menu-info">
              

                <p></p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

       
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                
                <span class="pull-right-container">
                
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab"></div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading"></h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
            
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
            
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>


 
 <script src="{{asset('AdminLTE-2.4.3/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('AdminLTE-2.4.3/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE-2.4.3/dist/js/adminlte.min.js')}}"></script>

<script>
 $('#edit').on ('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget) 
  var nim = button.data('mynim')
  var nama = button.data('mynama')
  var jurusan = button.data('myjurusan')
  var jenis_kelamin = button.data('myjeniskelamin')
  var alamat = button.data('myalamat') 
  var modal = $(this)

  
  modal.find('.modal-body #nim').val(nim);
  modal.find('.modal-body #nama').val(nama);
  modal.find('.modal-body #jurusan').val(jurusan);
  modal.find('.modal-body #jeniskelamin').val(jenis_kelamin);
  modal.find('.modal-body #alamat').val(alamat);

})

$('#delete').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 

  var nim = button.data('mynim')
 
  var modal = $(this)

  
  modal.find('.modal-body #nim').val(nim);
  

})
</script>

</body>
</html>