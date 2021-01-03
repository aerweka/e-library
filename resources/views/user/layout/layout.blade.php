<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('page title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php date_default_timezone_set("Asia/Bangkok"); ?>
  @include('user/layout/css_global')
  @yield('custom_css')
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    @include('user/layout/sidebar')
    @include('user/layout/navbar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>@yield('title')</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <!--<li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>-->
                @yield('breadcrump')
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        @yield('content')

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.5
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ URL::asset('/asset/jquery/jquery.min.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="{{ URL::asset('/asset/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- fontAwesome 4 -->
  <script src="https://kit.fontawesome.com/004384c260.js" crossorigin="anonymous"></script>

  <!-- AdminLTE App -->
  <script src="{{ URL::asset('/asset/dist/js/adminlte.min.js') }}"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="{{ URL::asset('/asset/dist/js/demo.js') }}"></script>

  <!-- datatables -->
  <script src="{{  URL::asset('/asset/datatables/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{  URL::asset('/asset/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{  URL::asset('/asset/datatables/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{  URL::asset('/asset/datatables/js/responsive.bootstrap4.min.js') }}"></script>

  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable({
        "responsive": true,
        "autoWidth": false
      });
    });
  </script>

  <!-- jquery validation -->
  <script src="{{ URL::asset('/asset/jquery/jquery-validation/jquery.validate.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/jquery/jquery-validation/additional-methods.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/jquery/script.js') }}"></script>
  <!-- SweetAlert2 -->
  <script src="{{ URL::asset('/asset/jquery/sweetalert2/sweetalert2.min.js') }}"></script>
  <!-- Toastr -->
  <script src="{{ URL::asset('/asset/jquery/toastr/toastr.min.js') }}"></script>
  <!-- Select2 -->
  <script src="{{ URL::asset('/asset/jquery/select2/js/select2.full.min.js') }}"></script>
  <!-- custom script -->
  <script src="{{ URL::asset('/asset/jquery/script.js') }}"></script>

  <script>
    $(function() {
      //Initialize Select2 Elements
      $('.select2').select2();
    });
  </script>

  @yield('custom_script')
</body>

</html>