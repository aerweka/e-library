@extends('user/layout/layout')
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
    <div class="col">
      <p>
        <h3>Selamat Datang di E-Library</h3>Disini anda dapat melihat koleksi buku kami dan meminjam apabila anda berminat membaca buku tersebut. Perpustakaan kami memiliki koleksi lengkap dari tiap jenis buku yang anda inginkan.
      </p>

      <div class="form-group">
        <label for="">Silahkan ketik untuk mencari buku :</label>
        <form action="{{ route('cari_buku') }}" method="post">
          @csrf
          <div class="input-group">
            <input type="text" name="key" placeholder="Cari buku" class="form-control">
            <div class="input-group-append">
              <span class="input-group-text"><input type="submit" value="" class="fa fa-search"></span>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection