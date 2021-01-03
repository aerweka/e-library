@extends('admin/layout/layout')
@section('page title', 'Tambah Data Customer')
@section('title', 'Tambah Data Customer')
@section('content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Tambah Data Customer</h3>
			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
				<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
			</div>
		</div>
		<div class="card-body">
			<form action="/customer/insertData" method="post" id="addform">
				<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
				<table>
					<tr>
						<td>Nama depan</td>		
						<td><input type="text" name="f_name"></td>
					</tr>
					<tr>
						<td>Nama belakang</td>	
						<td><input type="text" name="l_name"></td>
					</tr>
						<td>Telpon</td> 		
						<td><input type="text" name="phone"></td>
					</tr>
					<tr>
						<td>Email</td>		 	
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="street"></td>
					</tr>
					<tr>
						<td>Kota</td>	
						<td><input type="text" name="city"></td>
					</tr>
					<tr>
						<td>Provinsi</td>
						<td><input type="text" name="state"></td>
					</tr>
					<tr>
						<td>Kode Pos</td>	
						<td><input type="text" name="zip_code"></td>
					</tr>
				</table>
		</div>
		<!-- /.card-body -->
		<div class="card-footer">
				<input type="submit" name="Simpan">	
			</form>
		</div>
		<!-- /.card-footer-->
	</div>
@endsection
@section('custom_script')
<script src="{{ asset('asset/jquery-validation/additional-methods.min.js') }}"></script>
<script src="{{ asset('asset/jquery-validation/jquery.validate.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$.validator.setDefaults({
			submitHandler: function () {
			alert( "Form berhasil disubmit!" );
			}
		});
		$('#addform').validate({
			rules: {
				f_name: {
					required: true
				},
				l_name: {
					required: true
				},
				phone: {
					required: true,
					minlength: 10,
					type: int
				},
				email: {
					required: true,
					email: true
				},
				street: {
					required: true
				},
				city: {
					required: true
				},
				state: {
					required: true
				},
				zip_code: {
					required: true
				}
			},
			messages: {
				f_name: "Harap masukkan nama depan kamu!",
				l_name: "Harap masukkan nama belakang kamu!",
				phone: {
					required: "Harap masukkan nomor telepon kamu!",
					minlength: "Harap masukkan minimal 10 digit!",
					type: "Harap gunakan angka!"
				},
				email: {
					required: "Harap masukkan alamat email kamu!",
					email: "Harap masukkan email yang valid!"
				},
				street: "Harap masukkan alamat kamu!",
				city: "Harap masukkan kota kamu!",
				state: "Harap masukkan provinsi kamu!",
				zip_code: "Harap masukkan kode pos kamu!"
			},
			errorElement: 'span',
			errorPlacement: function (error, element) {
				error.addClass('invalid-feedback');
				element.closest('.form-group').append(error);
			},
			highlight: function (element, errorClass, validClass) {
				element).addClass('is-invalid');
			},
			unhighlight: function (element, errorClass, validClass) {
				$(element).removeClass('is-invalid');
			}
		});
	});
</script>
@endsection