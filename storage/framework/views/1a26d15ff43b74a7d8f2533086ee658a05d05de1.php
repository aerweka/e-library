<?php $__env->startSection('body'); ?>

<body class="hold-transition register-page background">
    <div class="register-box">
        <div class="card">
            <div class="card-body register-card-body">
                <div class="register-logo">
                    <a href="#"><b>Web</b>Laravel</a>
                </div>
                <p class="login-box-msg">Sign up a new account</p>
                <form action="<?php echo e(route('post_register')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="input-group mb-3">
                        <input name="username" type="text" class="form-control" placeholder="Username" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Email" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <select name="role" class="form-control" aria-label="Default select example">
                            <option selected disabled>Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class=""></span>
                                </div>
                            </div>
                        </select>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col mx-auto">
                            <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <hr>
                <div class="text-center">
                    <p>Have an account?
                        <a href="/" style="font-size: 16px;">Log in</a>
                    </p>
                </div>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.login.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/login/register.blade.php ENDPATH**/ ?>