@extends('admin/layout/layout')
@section('page title', 'Data Pegawai')
@section('title', 'Data Pegawai')
@section('breadcrump')
<li class="breadcrumb-item"><a href="/index">Home</a></li>
<li class="breadcrumb-item active">Data Pegawai</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Data pegawai</h3>
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
				<a href="/pegawai/addPegawai"><button class="btn btn-primary btn-sm mb-3">Tambah</button></a>
			</div>
		</div>
		<!--<table class="table table-head-fixed text-nowrap">-->
		<table id="dataTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nip</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Password</th>
					<th>Status</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pegawai as $data)
				<tr>
					<td>{{ $data->nip }}</td>
					<td>{{ $data->nama_pegawai }}</td>
					<td>{{ $data->username }}</td>
					<td>{{ $data->password }}</td>
					@if ($data->status == '1')
					<td>Aktif</td>
					@else
					<td>Tidak Aktif</td>
					@endif
					<td>
						<a style="color:rgb(44, 47, 51);" class="fa fa-pencil-square mx-auto" aria-hidden="true" id="delete" href="/pegawai/editPegawai/{{ $data->nip }}"></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
	<!-- <div class="card-footer">
		<a href="/pegawai/addPegawai"><b>Tambah Data pegawai</b></a>
	</div> -->
	<!-- /.card-footer-->
</div>
@endsection