@extends('login.layout')
@section('body')

<body class="hold-transition login-page background">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <div class="login-logo">
          <p href="#"><b>Web</b>Laravel</p>
        </div>

        <form action="{{ route('/auth') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input name="username" type="text" class="form-control" placeholder="Username" autocomplete="off">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
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
          <div class="row ">
            <!-- /.col -->
            <div class="col">
              <button type="submit" class="btn btn-outline-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <!-- <div class="text-center">
          <p class="mb-0 mt-3">
            <a href="/forgotPassword" style="font-size: 15px;" class="text-center mx-auto">I forgot my password!</a>
          </p>
        </div> -->
        <hr>
        <div class="text-center">
          <p class="mb-0 mt-0" style="font-size: 16px;">Don't have an account?
            <a href="/register" style="font-size: 16px;" class="text-center mx-auto">Sign Up</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- /.login-card-body -->
  </div>
  <!-- <img src="{{ URL::asset('/asset/image/bg-login.jpg') }}" alt=""> -->
  </div>
  <!-- /.login-box -->
  @endsection