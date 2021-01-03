<?php $__env->startSection('body'); ?>

<body class="hold-transition login-page background">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <div class="login-logo">
          <a href="#"><b>Web</b>Laraboots</a>
        </div>
        <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

        <form action="<?php echo e(route('post_email')); ?>" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Request new password</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="mb-0 mt-3 text-center">
          <a href="/register">Create New Account</a>
        </p>
        <p class="mt-3  text-center">
          <a href="/">Back to Login</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.login.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/login/forgotPassword.blade.php ENDPATH**/ ?>