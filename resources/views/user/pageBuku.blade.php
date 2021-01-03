@extends('user/layout/layout')
@section('page title', 'Data Buku')
@section('title', 'Data Buku')
@section('breadcrump')
<li class="breadcrumb-item"><a href="/index">Home</a></li>
<li class="breadcrumb-item active">Data Buku</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Data Buku</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<table id="dataTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No ISBN</th>
					<th>Judul Buku</th>
					<th>Tahun Terbit</th>
					<th>Penulis</th>
					<th>Cetakan</th>
					<th>Harga</th>
					<th>Eksemplar</th>
					<th>Kategori</th>
					<th>Jenis Buku</th>
					<th>Penerbit</th>
					<th>Bahasa</th>
					<th>Pinjam</th>
				</tr>
			</thead>
			<tbody>
				@foreach($buku as $data)
				<tr>
					<td>{{ $data->no_isbn }}</td>
					<td>{{ $data->judul_buku }}</td>
					<td>{{ $data->tahun_terbit }}</td>
					<td>{{ $data->penulis }}</td>
					<td>{{ $data->cetakan_ke }}</td>
					<td>{{ $data->harga }}</td>
					<td>{{ $data->jml_eksemplar }}</td>
					<td>{{ $data->kategori_buku }}</td>
					<td>{{ $data->id_jb }}</td>
					<td>{{ $data->id_penerbit }}</td>
					<td>{{ $data->id_bhs }}</td>
					<td>
						<a style="color:rgb(44, 47, 51);" aria-hidden="true" id="delete" href="/buku/editBuku/{{ $data->no_isbn }}">Pinjam</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	@endsection