@extends('admin/layout/layout')
@section('page title', 'Data Jenis Buku')
@section('title', 'Data Jenis Buku')
@section('breadcrump')
<li class="breadcrumb-item"><a href="/index">Home</a></li>
<li class="breadcrumb-item active">Data Jenis Buku</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Data Jenis Buku</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<!--<div class="card-body table-responsive p-0" style="height: 300px;">-->
	<div class="card-body">
		<div class="row">
			<div class="col">
				<a href="/jenisbuku/addJenisBuku"><button class="btn btn-primary btn-sm mb-3">Tambah</button></a>
			</div>
		</div>
		<!--<table class="table table-head-fixed text-nowrap">-->
		<table id="dataTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Id Jenis Buku</th>
					<th>Nama Jenis Buku</th>
					<th>Kode Jenis Buku</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				@foreach($jenis_buku as $data)
				<tr>
					<td>{{ $data->id_jb }}</td>
					<td>{{ $data->nama_jb }}</td>
					<td>{{ $data->kode_jb }}</td>
					<td>
						<a style="color:rgb(44, 47, 51);" class="fa fa-pencil-square" aria-hidden="true" id="delete" href="/jenisbuku/editJenisBuku/{{ $data->id_jb }}"></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
	<!-- <div class="card-footer">
		<a href="/jenisbuku/addJenisBuku"><b>Tambah Data Jenis Buku</b></a>
	</div> -->
	<!-- /.card-footer-->
</div>
@endsection