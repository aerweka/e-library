@extends('admin.layout.layout')
@section('page title', 'Tambah Eksemplar Buku')
@section('title', 'Tambah Eksemplar Buku')
@section('breadcrump')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Tambah Eksemplar Buku</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Tambah Eksemplar Buku</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/eksemplar/insertData" method="post" id="addEksemplar">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="inputISBN">Buku</label>
				<select name="no_isbn" class="form-control">
					<option value="" disabled selected>Pilih Buku</option>
					@foreach($buku as $key)
					<option value="{{ $key->no_isbn }}">{{ $key->no_isbn }} - {{ $key->judul_buku }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="inputStatus">Status</label>
				<select name="status" class="form-control">
					<option value="" disabled selected>Pilih Status Eksemplar Buku</option>
					<option value="Ada">Ada</option>
					<option value="Kosong">Kosong</option>
				</select>
			</div>
			<div class="form-group">
				<label for="inputCondition">Kondisi Eksemplar Buku</label>
				<select name="condition" class="form-control">
					<option value="" disabled selected>Pilih Kondisi Eksemplar Buku</option>
					<option value="Lengkap">Lengkap</option>
					<option value="Tidak Lengkap">Tidak Lengkap</option>
					<option value="Aman">Aman</option>
					<option value="Rusak">Rusak</option>
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
		$('#addEksemplar').validate({
			rules: {
				no_isbn: {
					required: true
				},
				status: {
					required: true
				},
				condition: {
					required: true
				}
			},
			messages: {
				no_isbn: "Harap pilih buku!",
				status: "Harap masukkan statu eksemplar buku!",
				condition: "Harap masukkan kondisi eksemplar buku!"
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