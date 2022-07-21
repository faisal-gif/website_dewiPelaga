<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pengabdian Website</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('adminLte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('adminLte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminLte/dist/css/adminlte.min.css')}}">
   <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminLte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('adminLte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('adminLte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="{{ asset('logo.png')}}" height="100" width="100">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
       
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        
        <span class="brand-text font-weight-light">Pengabdian Website</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
          </div>
        </div>

     
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="/home" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-header">Informasi</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                Manage Informasi
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/formInformasi" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Input Informasi</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/showInformasi" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Show Informasi</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-header">Posting</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                Manage Posting
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/formPosting" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Input Posting</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/showPosting" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Show Posting</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-header">Produk</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Manage Produk
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/formProduk" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Input Produk</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/showProduk" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Show Produk</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">Log Out</li>
            <li class="nav-item">
                                    
                  <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Log Out</p>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </li>
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
              <h1 class="m-0">Dashboard v2</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v2</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Isis\ content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
           
            @yield('content')


            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="{{ asset('adminLte/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('adminLte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('adminLte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('adminLte/dist/js/adminlte.js')}}"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="{{ asset('adminLte/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
  <script src="{{ asset('adminLte/plugins/raphael/raphael.min.js')}}"></script>
  <script src="{{ asset('adminLte/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
  <script src="{{ asset('adminLte/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{ asset('adminLte/plugins/chart.js/Chart.min.js')}}"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('adminLte/dist/js/demo.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset('adminLte/dist/js/pages/dashboard2.js')}}"></script>
  <!-- DataTables  & Plugins -->
<script src="{{ asset('adminLte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('adminLte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('adminLte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('adminLte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('adminLte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('adminLte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('adminLte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>

</html>