@extends('admin/layout/layout')
@section('page title', 'Tambah Anggota')
@section('title', 'Tambah Anggota')
@section('breadcrump')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Tambah Anggota</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Tambah Anggota</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/anggota/insertData" method="post" id="addAnggota">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="inputName">Nama</label>
				<input type="text" name="name" class="form-control" placeholder="Nama Kamu">
			</div>
			<div class="form-group">
				<!--<label for="exampleInputEmail1">Tahun Masuk</label>
                    <input type="text"  name="year_in" class="form-control" placeholder="Tahun Masuk Kamu Kapan?">-->
				<label for="inputYearIn">Tahun Masuk</label>
				<select name="year_in" class="form-control">
					<option value="" disabled selected>Pilih Tahun Masuk</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
				</select>
			</div>
			<div class="form-group">
				<label for="inputClass">Kelas</label>
				<input type="text" name="class" class="form-control" placeholder="Kamu Kelas Mana?">
			</div>
			<div class="form-group">
				<label for="inputUsername">Username</label>
				<input type="text" name="username" class="form-control" placeholder="Buat Username Kamu">
			</div>
			<div class="form-group">
				<label for="inputPassword">Password</label>
				<input type="password" name="password" class="form-control" placeholder="Masukkan Password">
			</div>
			<div class="form-group">
				<label for="inputStatus">Status</label>
				<div class="row">
					<div class="form-check form-check-inline ml-2">
						<input class="form-check-input" type="radio" name="status" value="Aktif">
						<label class="form-check-label">Aktif</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="status" value="Inaktif">
						<label class="form-check-label">Inaktif</label>
					</div>
				</div>
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
				title: 'Data sukses disubmit'
			})
		});
	});

	$(document).ready(function() {
		$('#addAnggota').validate({
			rules: {
				name: {
					required: true
				},
				year_in: {
					required: true
				},
				class: {
					required: true
				},
				username: {
					required: true
				},
				password: {
					required: true,
					minlength: 10
				},
				status: {
					required: true
				}
			},
			messages: {
				name: "Harap masukkan nama kamu!",
				year_in: "Harap pilih tahun masuk kamu!",
				class: {
					required: "Harap masukkan kelas kamu!"
				},
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