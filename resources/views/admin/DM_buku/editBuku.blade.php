@extends('admin/layout/layout')
@section('page title', 'Edit Data Buku')
@section('title', 'Edit Data Buku')
@section('breadcrump')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Edit Jenis Buku</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Edit Jenis Buku</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/buku/updateData" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="inputISBN">No. ISBN</label>
				<input type="text" name="no_isbn" class="form-control" value="{{ $buku[0]->no_isbn }}" readonly>
			</div>
			<div class="form-group">
				<label for="inputTitle">Judul Buku</label>
				<input type="text" name="title" class="form-control" value="{{ $buku[0]->judul_buku }}">
			</div>
			<div class="form-group">
				<label for="inputYear">Tahun Terbit</label>
				<input type="text" name="year" class="form-control" value="{{ $buku[0]->tahun_terbit }}">
			</div>
			<div class="form-group">
				<label for="inputAuthor">Penulis</label>
				<input type="text" name="author" class="form-control" value="{{ $buku[0]->penulis }}">
			</div>
			<div class="form-group">
				<label for="inputPrint">Cetakan</label>
				<input type="text" name="print" class="form-control" value="{{ $buku[0]->cetakan_ke }}">
			</div>
			<div class="form-group">
				<label for="inputPrice">Harga</label>
				<input type="text" name="price" class="form-control" value="{{ $buku[0]->harga }}">
			</div>
			<div class="form-group">
				<label for="inputCopy">Eksemplar</label>
				<input type="text" name="copy" class="form-control" value="{{ $buku[0]->jml_eksemplar }}">
			</div>
			<div class="form-group">
				<label for="inputCategory">Kategori</label>
				<input type="text" name="category" class="form-control" value="{{ $buku[0]->kategori_buku }}">
			</div>
			<div class="form-group">
				<label for="inputJB">Jenis Buku</label>
				<select name="id_jb" id="id_jb" class="form-control" value="$buku[0]->id_jb">
					@foreach($jenis_buku as $jb)
					<option name="id_jb" id="id_jb" value="{{ $jb->id_jb }}" {{ $buku[0]->id_jb == $jb->id_jb ? 'selected' : '' }}>{{ $jb->kode_jb }} - {{ $jb->nama_jb }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="inputPenerbit">Penerbit</label>
				<select name="id_penerbit" class="form-control" value="$buku[0]->id_penerbit">
					@foreach($penerbit as $p)
					<option name="id_penerbit" id="id_penerbit" value="{{ $p->id_penerbit }}" {{ $buku[0]->id_penerbit == $p->id_penerbit ? 'selected' : '' }}>{{ $p->nama_penerbit }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="inputLang">Bahasa</label>
				<select name="id_bhs" class="form-control" value="$buku[0]->id_bhs">
					@foreach($bahasa as $b)
					<option name="id_bhs" id="id_bhs" value="{{ $b->id_bhs }}" {{ $buku[0]->id_bhs == $b->id_bhs ? 'selected' : '' }}>{{ $b->nama_bhs }}</option>
					@endforeach
				</select>
			</div>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
		<input type="submit" name="Update" class="btn btn-primary swalDefaultSuccess">
		</form>
	</div>
	<!-- /.card-footer-->
</div>
@endsection
@section('custom_script')
<script type="text/javascript">
	$(function() {
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
		});

		$('.swalDefaultSuccess').click(function() {
			Toast.fire({
				icon: 'success',
				title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
	});
</script>
@endsection