<?php $__env->startSection('page title', 'Tambah Penerbit'); ?>
<?php $__env->startSection('title', 'Tambah Penerbit'); ?>
<?php $__env->startSection('breadcrump'); ?>
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Tambah Penerbit</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Tambah Penerbit</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/penerbit/insertData" method="post" id="addPenerbit">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="inputName">Nama Penerbit</label>
				<input type="text" required="required" name="name" class="form-control" placeholder="Masukkan Nama Penerbit">
			</div>
			<div class="form-group">
				<label for="inputClass">Alamat Penerbit</label>
				<input type="text" required="required" name="address" class="form-control" placeholder="Masukkan Alamat Penerbit">
			</div>
			<div class="form-group">
				<label for="inputClass">Nomor Telpon</label>
				<input type="text" required="required" name="phone" class="form-control" placeholder="Masukkan Nomor Telpon Penerbit">
			</div>
			<div class="form-group">
				<label for="inputClass">Email Penerbit</label>
				<input type="email" required="required" name="email" class="form-control" placeholder="Masukkan Email Penerbit">
			</div>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
		<input type="submit" name="Simpan" class="btn btn-primary swalDefaultSuccess">
		</form>
	</div>
	<!-- /.card-footer-->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_script'); ?>
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
		$.validator.setDefaults({
			submitHandler: function() {
				alert("Form berhasil disubmit!");
			}
		});
		$('#addPenerbit').validate({
			rules: {
				name: {
					required: true
				},
				address: {
					required: true
				},
				phone: {
					required: true,
					type: true
				},
				email: {
					required: true,
					type: true
				}
			},
			messages: {
				name: "Harap masukkan nama penerbit!",
				address: "Harap masukkan alamat penerbit!",
				phone: {
					required: "Harap Masukkan Nomor Telpon",
					type: "Harap Masukkan Angka"
				},
				email: {
					required: "Harap Masukkan Email Penerbit",
					type: "Harap Masukkan Email dengan Benar"
				}
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/DM_penerbit/addPenerbit.blade.php ENDPATH**/ ?>