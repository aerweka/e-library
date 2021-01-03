@extends('admin/layout/layout')
@section('page title', 'Tambah Jenis Buku')
@section('title', 'Tambah Jenis Buku')
@section('breadcrump')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Tambah Jenis Buku</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Tambah Jenis Buku</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/jenisbuku/insertData" method="post" id="addJenisBuku">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="inputName">Nama Jenis Buku</label>
				<input type="text" required="required" name="name" class="form-control" placeholder="Nama Jenis Buku">
			</div>
			<div class="form-group">
				<label for="inputClass">Kode Jenis Buku</label>
				<input type="text" required="required" name="code" class="form-control" placeholder="Kasih Kode dong">
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
				title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
	});

	$(document).ready(function() {
		$('#addJenisBuku').validate({
			rules: {
				name: {
					required: true
				},
				code: {
					required: true
				}
			},
			messages: {
				name: "Harap masukkan nama jenis buku!",
				code: "Harap beri kode!"
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