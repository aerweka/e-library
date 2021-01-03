@extends('admin/layout/layout')
@section('page title', 'Data Penerbit')
@section('title', 'Data Penerbit')
@section('breadcrump')
<li class="breadcrumb-item"><a href="/index">Home</a></li>
<li class="breadcrumb-item active">Data Penerbit</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Data Penerbit</h3>
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
				<a href="/penerbit/addPenerbit"><button class="btn btn-primary btn-sm mb-3">Tambah</button></a>
			</div>
		</div>
		<!--<table class="table table-head-fixed text-nowrap">-->
		<table id="dataTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Id Penerbit</th>
					<th>Nama Penerbit</th>
					<th>Alamat Penerbit</th>
					<th>Nomor Telpon</th>
					<th>Email Penerbit</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				@foreach($penerbit as $data)
				<tr>
					<td>{{ $data->id_penerbit }}</td>
					<td>{{ $data->nama_penerbit }}</td>
					<td>{{ $data->alamat_penerbit }}</td>
					<td>{{ $data->no_telp_penerbit }}</td>
					<td>{{ $data->email_penerbit }}</td>
					<td>
						<a style="color:rgb(44, 47, 51);" class="fa fa-pencil-square" aria-hidden="true" id="delete" href="/penerbit/editPenerbit/{{ $data->id_penerbit }}"></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
	<!-- <div class="card-footer">
		<a href="/penerbit/addPenerbit"><b>Tambah Data Penerbit</b></a>
	</div> -->
	<!-- /.card-footer-->
</div>
@endsection