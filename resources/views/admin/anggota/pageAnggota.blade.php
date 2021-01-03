@extends('admin/layout/layout')
@section('page title', 'Data Anggota')
@section('title', 'Data Anggota')
@section('breadcrump')
<li class="breadcrumb-item"><a href="/index">Home</a></li>
<li class="breadcrumb-item active">Data Anggota</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Data Anggota</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col">
				<a href="/anggota/addAnggota"><button class="btn btn-primary btn-sm mb-3">Tambah</button></a>
			</div>
		</div>
		<table id="dataTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nis_Nip</th>
					<th>Nama</th>
					<th>Tahun Masuk</th>
					<th>Kelas</th>
					<th>Username</th>
					<th>Password</th>
					<th>Status</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				@foreach($anggota as $data)
				<tr>
					<td>{{ $data->nis_nip }}</td>
					<td>{{ $data->nama_anggota }}</td>
					<td>{{ $data->tahun_masuk }}</td>
					<td>{{ $data->kelas }}</td>
					<td>{{ $data->username }}</td>
					<td>{{ $data->password }}</td>
					<td>{{ $data->status }}</td>
					<td>
						<a style="color:rgb(44, 47, 51);" class="fa fa-pencil-square" aria-hidden="true" id="delete" href="/anggota/editAnggota/{{ $data->nis_nip }}"></a>
						<a style="color:rgb(44, 47, 51);" class="fa fa-trash ml-2" aria-hidden="true" id="delete" href="/anggota/delete/{{ $data->nis_nip }}" onclick="return confirm('yakin?')"></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
	<!-- <div class="card-footer">

	</div> -->
	<!-- /.card-footer-->
</div>
@endsection