<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $__env->yieldContent('page title'); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php date_default_timezone_set("Asia/Bangkok"); ?>
  <?php echo $__env->make('admin/layout/css_global', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('custom_css'); ?>
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <?php echo $__env->make('admin/layout/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin/layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><?php echo $__env->yieldContent('title'); ?></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <!--<li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>-->
                <?php echo $__env->yieldContent('breadcrump'); ?>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <?php echo $__env->yieldContent('content'); ?>

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
  <script src="<?php echo e(URL::asset('/asset/jquery/jquery.min.js')); ?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="<?php echo e(URL::asset('/asset/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

  <!-- fontAwesome 4 -->
  <script src="https://kit.fontawesome.com/004384c260.js" crossorigin="anonymous"></script>

  <!-- AdminLTE App -->
  <script src="<?php echo e(URL::asset('/asset/dist/js/adminlte.min.js')); ?>"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo e(URL::asset('/asset/dist/js/demo.js')); ?>"></script>

  <!-- datatables -->
  <script src="<?php echo e(URL::asset('/asset/datatables/js/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('/asset/datatables/js/dataTables.bootstrap4.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('/asset/datatables/js/dataTables.responsive.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('/asset/datatables/js/responsive.bootstrap4.min.js')); ?>"></script>

  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable({
        "responsive": true,
        "autoWidth": false
      });
    });
  </script>

  <!-- jquery validation -->
  <script src="<?php echo e(URL::asset('/asset/jquery/jquery-validation/jquery.validate.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('/asset/jquery/jquery-validation/additional-methods.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('/asset/jquery/script.js')); ?>"></script>
  <!-- SweetAlert2 -->
  <script src="<?php echo e(URL::asset('/asset/jquery/sweetalert2/sweetalert2.min.js')); ?>"></script>
  <!-- Toastr -->
  <script src="<?php echo e(URL::asset('/asset/jquery/toastr/toastr.min.js')); ?>"></script>
  <!-- Select2 -->
  <script src="<?php echo e(URL::asset('/asset/jquery/select2/js/select2.full.min.js')); ?>"></script>
  <!-- custom script -->
  <script src="<?php echo e(URL::asset('/asset/jquery/script.js')); ?>"></script>

  <script>
    $(function() {
      //Initialize Select2 Elements
      $('.select2').select2();
    });
  </script>

  <?php echo $__env->yieldContent('custom_script'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/layout/layout.blade.php ENDPATH**/ ?>