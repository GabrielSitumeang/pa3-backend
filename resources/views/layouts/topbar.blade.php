<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crop System</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{ asset('lte/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/fontawesome.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{asset('css/admin.css') }}">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

 <!-- Navbar -->
 {{-- @include('home/header') --}}
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                {{-- <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-user"></i>
                </a> --}}
                {{-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"> --}}
                    {{-- <span class="dropdown-header">{{ Auth::user()->username }}</span > --}}
                    <div class="dropdown-divider"></div>
                    <a href="#" 
                        class="dropdown-item dropdown-footer"
                       onclick="logout()"
                       style="color: red"
                    >Logout</a>
                {{-- </div> --}}
                <form id="logout-form" action="/logout" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  {{-- @include('home/sidebar') --}}


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    
        <a href="#" class="brand-link projek_name">
          <img src="{{ asset('images/leaf.png') }}" alt="CropSystem" class="" width="30px" style="opacity: .8">
          <span class="brand-text font-weight-light" style="color: white">Admin CropSystem</span>
        </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon 	fas fa-seedling"></i>
              <p>
                Budidaya Tanaman  
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('tanaman.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Tanaman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('rotasi.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rotasi Tanaman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('pemantauan.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemantauan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('persiapan.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Persiapan Lahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('penanaman.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penanaman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('pupuk.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemupukan</p>
                </a>
              <li class="nav-item">
                <a href="{{ route('irigasi.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Irigasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('panen.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Panen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('pascapanen.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pasca Panen</p>
                </a>
              </li>
            </ul>
          </li>

<!-- Ajukan Informasi /-->   
          <li class="nav-item">
            <a href="{{ route('ajukan.index') }}"  class="nav-link">
              <i class="nav-icon fa fa-info-circle"></i>
              <p>
                Ajukan Informasi   
              </p>
            </a>
           
          </li>

<!-- HAMA DAN PENYAKIT /-->        
          <li class="nav-item">
            <a href="{{ route('hama.index') }}"  class="nav-link">
              <i class="nav-icon fas fa-shield-virus"></i>
              <p>
                Hama dan Penyakit   
              </p>
            </a>
           
          </li>

<!-- Komunitas /-->        
          <li class="nav-item">
            <a href="{{ route('komunitas.index') }}" class="nav-link">
              <i class="nav-icon fas fa-people-arrows"></i>
              <p>
                Komunitas
              </p>
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
    {{-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid --> --}}
      @yield('content')
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    {{-- <div class="content">
      <div class="container-fluid">
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div> --}}
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
    <footer class="main-footer">
        <span class="text-muted">Copyright &copy; <?php echo date("Y"); ?> | CropSystem | Kelompok VII PA III</span>
    </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('lte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('lte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>

<script src="{{ asset('lte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('lte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('lte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Select2 -->
<script src="{{ asset('lte/plugins/select2/js/select2.full.js')}}"></script>
<script src="{{ asset('lte/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{ asset('lte/plugins/select2/js/select2.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js')}}"></script>
    <script src="{{ asset('template/datatables-demo.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.5.0/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
