@extends('admin.layout.layout')
@section ('tittle','Histori Peminjaman')
@section('page title', 'Histori Peminjaman')
@section('title', 'Histori Peminjaman')
@section('breadcrump')
<li class="breadcrumb-item"><a href="/index">Home</a></li>
<li class="breadcrumb-item active">Data Peminjaman</li>
@endsection
@section('custom_css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Histori Peminjaman</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <!--<div class="card-body table-responsive p-0" style="height: 300px;">-->
    <div class="card-body">
        <!--<table class="table table-head-fixed text-nowrap">-->
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>id_siswa</th>
                    <th>id_peminjaman</th>
                    <th>status peminjaman</th>
                    <th>tanggal harus kembali</th>
                    <th>tanggal kembali</th>
                    <th>perpanjang</th>
                    <th>status verifikasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>nis00001</td>
                    <td>pnj000001</td>
                    <td>Dipinjam</td>
                    <td>19 Agustus 2001</td>
                    <td>-</td>
                    <td>tidak</td>
                    <td>terverivikasi</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('custom_script')
<!-- DataTables -->
<script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>
@endsection