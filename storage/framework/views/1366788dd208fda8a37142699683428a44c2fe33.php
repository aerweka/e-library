<?php $__env->startSection('page title', 'Edit Data Pegawai'); ?>
<?php $__env->startSection('title', 'Edit Data Pegawai'); ?>
<?php $__env->startSection('breadcrump'); ?>
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Edit Data Pegawai</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Edit Data Pegawai</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/pegawai/updateData" method="post" id="editPegawai">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="inputNip">Nip</label>
				<input type="text" name="nip" class="form-control" value="<?php echo e($pegawai[0]->nip); ?>">
			</div>
			<div class="form-group">
				<label for="inputNama">Nama Pegawai</label>
				<input type="text" name="name" class="form-control" value="<?php echo e($pegawai[0]->nama_pegawai); ?>">
			</div>
			<div class="form-group">
				<label for="inputUsername">Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo e($pegawai[0]->username); ?>">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Password</label>
				<input type="password" name="password" class="form-control" value="<?php echo e($pegawai[0]->password); ?>">
			</div>
			<label for="inputStatus">Status</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="status" value="1" <?php echo e($pegawai[0]->status == '1' ? 'checked' : ''); ?>>
				<label class="form-check-label">Aktif</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="status" value="0" <?php echo e($pegawai[0]->status == '0' ? 'checked' : ''); ?>>
				<label class="form-check-label">Tidak Aktif</label>
			</div>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
		<input type="submit" name="Update" class="btn btn-primary swalDefaultSuccess">
		</form>
	</div>
	<!-- /.card-footer-->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_script'); ?>
<!-- SweetAlert2 -->
<script src="<?php echo e(URL::asset('asset/jquery/sweetalert2/sweetalert2.min.js')); ?>"></script>
<!-- Toastr -->
<script src="<?php echo e(URL::asset('asset/jquery/toastr/toastr.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('asset/jquery/jquery-validation/jquery.validate.min.js')); ?>">
</script>
<script src="<?php echo e(URL::asset('asset/jquery/jquery-validation/additional-methods.min.js')); ?>"></script>
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
		$('#editPegawai').validate({
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_css'); ?>
<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?php echo e(URL::asset('asset/css/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
<!-- Toastr -->
<link rel="stylesheet" href="{{ URL::asset('asset/css/toastr/toastr.min.css">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/Pegawai/editPegawai.blade.php ENDPATH**/ ?>