@extends('admin/layout/layout')
@section('page title', 'Tambah Bahasa')
@section('title', 'Tambah Bahasa')
@section('breadcrump')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Tambah Bahasa</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Tambah Bahasa</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/bahasa/insertData" method="post" id="addBahasa">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="inputName">Jenis Bahasa</label>
				<input type="text" required="required" name="name" class="form-control" placeholder="Jenis Bahasa Buku">
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
		$('#addBahasa').validate({
			rules: {
				name: {
					required: true
				}
			},
			messages: {
				name: "Harap masukkan jenis bahasa buku!"
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
<link rel="stylesheet" href="{{ URL::asset('asset/css/toastr/toastr.min.css">
@endsection