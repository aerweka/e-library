@extends('admin/layout/layout')
@section('page title', 'Tambah Buku')
@section('title', 'Tambah Buku')
@section('breadcrump')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Tambah Buku</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Tambah Buku</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/penerimaan/insertBuku" method="post" id="addBuku">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<input type="hidden" name="count" value="{{$count}}">
			<input type="hidden" name="id" value="{{$id}}">
			<div class="form-group">
				<label for="inputISBN">No. ISBN</label>
				<input type="text" required="required" name="no_isbn" class="form-control" placeholder="Masukkan Nomor ISBN">
			</div>
			<div class="form-group">
				<label for="inputTitle">Judul Buku</label>
				<input type="text" required="required" name="title" class="form-control" placeholder="Masukkan Judul Buku">
			</div>
			<div class="form-group">
				<label for="inputYear">Tahun Terbit</label>
				<input type="text" required="required" name="year" class="form-control" placeholder="yyyy">
			</div>
			<div class="form-group">
				<label for="inputAuthor">Penulis</label>
				<input type="text" required="required" name="author" class="form-control" placeholder="Masukkan Penulis Buku">
			</div>
			<div class="form-group">
				<label for="inputPrint">Cetakan</label>
				<input type="text" required="required" name="print" class="form-control" placeholder="Cetakan ke - ">
			</div>
			<div class="form-group">
				<label for="inputPrice">Harga</label>
				<input type="text" required="required" name="price" class="form-control" placeholder="Rp. ">
			</div>
			<div class="form-group">
				<label for="inputCopy">Eksemplar</label>
				<input type="text" required="required" name="copy" class="form-control" placeholder="Masukkan Jumlah Eksemplar Buku">
			</div>
			<div class="form-group">
				<label for="inputCategory">Kategori</label>
				<input type="text" required="required" name="category" class="form-control" placeholder="Masukkan Kategori Buku">
			</div>
			<div class="form-group">
				<label for="inputJB">Jenis Buku</label>
				<select name="id_jb" class="form-control" required>
					<option value="" disabled selected>Pilih Jenis Buku</option>
					@foreach($jenis_buku as $key)
					<option value="{{ $key->id_jb }}">{{ $key->kode_jb }} - {{ $key->nama_jb }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="inputPenerbit">Penerbit</label>
				<select name="id_penerbit" class="form-control" required>
					<option value="" disabled selected>Pilih Penerbit</option>
					@foreach($penerbit as $key)
					<option value="{{ $key->id_penerbit }}">{{ $key->nama_penerbit }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="inputLang">Bahasa</label>
				<select name="id_bhs" class="form-control" required>
					<option value="" disabled selected>Pilih Bahasa</option>
					@foreach($bahasa as $key)
					<option value="{{ $key->id_bhs }}">{{ $key->nama_bhs }}</option>
					@endforeach
				</select>
			</div>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
		<input type="submit" name="Simpan" class="btn btn-primary swalDefaultSuccess">
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
				title: 'Data berhasil dimasukkan!'
			})
		});
	});
	$(document).ready(function() {
		$('#addBuku').validate({
			rules: {
				no_isbn: {
					required: true
				},
				title: {
					required: true
				},
				year: {
					required: true
				},
				author: {
					required: true
				},
				print: {
					required: true
				},
				price: {
					required: true
				},
				copy: {
					required: true
				},
				category: {
					required: true
				},
				id_jb: {
					required: true
				},
				id_penerbit: {
					required: true
				},
				id_bhs: {
					required: true
				}
			},
			messages: {
				no_isbn: "Harap masukkan ISBN Buku!",
				title: "Harap masukkan judul buku!",
				year: "Harap masukkan tahun rilis buku!",
				authot: "Harap masukkan penulis buku!",
				price: "Harap masukkan harga buku!",
				copy: "Harap masukkan jumlah cetakan buku!",
				category: "Harap masukkan kategori buku!",
				id_jb: "Harap pilih jenis buku",
				id_penerbit: "Harap pilih penerbit",
				id_bhs: "Harap pilih bahasa"
			},
			errorElement: 'span',
			errorPlacement: function(error, element) {
				error.addClass('invalid-feedback');
				element.closest('.form-group').append(error);
			},
			highlight: function(element, errorClass, validClass) {
				$(element).addClass('is-invalid');
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).removeClass('is-invalid');
			}
		});
	});
</script>
@endsection