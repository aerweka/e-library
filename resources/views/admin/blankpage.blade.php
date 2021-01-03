@extends('admin/layout/layout')
@section('page title', 'Laravel-Boots Web Based')
@section('title', 'Laravel-Boots Web Based')
@section('breadcrump')
<li class="breadcrumb-item active">Home</li>
@endsection
@section('content')
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">WELCOME ABOARD CHAMPS!</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="card-body">
    Hi there! Enjoy my website XD
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    HMU on @aerweka
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection