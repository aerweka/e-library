@extends('admin/layout/layout')
@section('page title', 'Tambah Pegawai')
@section('title', 'Tambah Pegawai')
@section('breadcrump')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Tambah Pegawai</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Tambah Pegawai</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/pegawai/insertData" method="post" id="addPegawai">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="inputName">Nip</label>
				<input type="text" name="nip" class="form-control" placeholder="Masukkan NIP">
			</div>
			<div class="form-group">
				<label for="inputName">Nama</label>
				<input type="text" name="name" class="form-control" placeholder="Masukkan nama lengkap">
			</div>
			<div class="form-group">
				<label for="inputUsername">Username</label>
				<input type="text" name="username" class="form-control" placeholder="Masukkan Username">
			</div>
			<div class="form-group">
				<label for="inputPassword">Password</label>
				<input type="password" name="password" class="form-control" placeholder="Masukkan Password">
			</div>
			<label for="inputStatus">Status</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="status" value="1">
				<label class="form-check-label">Aktif</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="status" value="0">
				<label class="form-check-label">Tidak Aktif</label>
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
<script src="{{ URL::asset('asset/jquery/jquery-validation/jquery.validate.min.js') }}">
</script>
<script src="{{ URL::asset('asset/jquery/jquery-validation/additional-methods.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ URL::asset('asset/jquery/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ URL::asset('asset/jquery/toastr/toastr.min.js') }}"></script>
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
				title: 'Data sukses disubmit'
			})
		});
	});

	$(document).ready(function() {
		$('#addPegawai').validate({
			rules: {
				nip: {
					required: true,
					number: true
				},
				name: {
					required: true
				},
				username: {
					required: true
				},
				password: {
					required: true
					//minlength: 10
				},
				status: {
					required: true
				}
			},
			messages: {
				nip: {
					required: "Harap masukkan NIP!",
					number: "Harap masukkan angka saja!"
				},
				name: "Harap masukkan nama kamu!",
				username: {
					required: "Harap masukkan username kamu!"
				},
				password: {
					required: "Harap masukkan alamat kamu!",
					minlength: "Harap masukkan minimal 10 digit!"
				},
				status: "Harap pilih status kamu!"
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
@section('custom_css')
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ URL::asset('asset/css/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
<!-- Toastr -->
<link rel="stylesheet" href="{{ URL::asset('asset/css/toastr/toastr.min.css') }}">
@endsection