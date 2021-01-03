@extends('admin/layout/layout')
@section('page title', 'Data Bahasa')
@section('title', 'Data Bahasa')
@section('breadcrump')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Data Bahasa</li>
@endsection
@section('custom_css')
<link rel="stylesheet" href="{{ asset('asset/datatables/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('asset/datatables/css/responsive.bootstrap4.min.css') }}">
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Data Bahasa</h3>
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
				<a href="/bahasa/addBahasa"><button class="btn btn-primary btn-sm mb-3">Tambah</button></a>
			</div>
		</div>
		<table id="dataTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Id Bahasa</th>
					<th>Jenis Bahasa</th>
					<th width="1%">Edit</th>
				</tr>
			</thead>
			<tbody>
				@foreach($bahasa as $data)
				<tr>
					<td>{{ $data->id_bhs }}</td>
					<td>{{ $data->nama_bhs }}</td>
					<td>
						<a style="color:rgb(44, 47, 51);" class="fa fa-pencil-square" aria-hidden="true" id="delete" href="/bahasa/editBahasa/{{ $data->id_bhs }}"></a>
						<a style="color:rgb(44, 47, 51);" class="fa fa-trash ml-2" aria-hidden="true" id="delete" href="/bahasa/delete/{{ $data->id_bhs }}"></a>
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