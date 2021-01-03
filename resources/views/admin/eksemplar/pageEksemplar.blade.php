@extends('admin.layout.layout')
@section('page title', 'Data Eksemplar Buku')
@section('title', 'Data Eksemplar Buku')
@section('breadcrump')
<li class="breadcrumb-item"><a href="/index">Home</a></li>
<li class="breadcrumb-item active">Data Eksemplar Buku</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Data Eksemplar Buku</h3>
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
		<table id="dataTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="15%">Kode Buku</th>
					<th>N0 ISBN - Judul Buku</th>
					<th width="10%">Status</th>
					<th width="10%">Kondisi</th>
					<th width="7%">Edit</th>
				</tr>
			</thead>
			<tbody>
				@foreach($eksemplar as $data)
				<tr>
					<td>{{ $data->kode_buku }}</td>
					@foreach ($buku as $b)
					@if ($data->no_isbn == $b->no_isbn)
					<td>{{ $b->no_isbn }} - <a style="font-weight: bold;">{{ $b->judul_buku }}</a>
					</td>
					@endif
					@endforeach
					@if ($data->status == '1')
					<td>Ada</td>
					@elseif ($data->status == '0')
					<td>Kosong</td>
					@else
					<td>Hilang</td>
					@endif
					@if ($data->kondisi_eksemplar == '1')
					<td>Baik</td>
					@else
					<td>Tidak Baik</td>
					@endif
					<td>
						<a style="color:rgb(44, 47, 51);" class="fa fa-pencil-square" aria-hidden="true" id="edit" href="/eksemplar/editEksemplar/{{ $data->kode_buku }}/{{ $data->no_isbn }}"></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
	<!-- <div class="card-footer">
		<a href="/eksemplar/addEksemplar"><b>Tambah Data Eksemplar Buku</b></a>
	</div> -->
	<!-- /.card-footer-->
	@endsection