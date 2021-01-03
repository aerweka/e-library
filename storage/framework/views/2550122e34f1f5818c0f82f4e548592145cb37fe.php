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
		<form action="/penerimaan/updateData" method="post" id="editPegawai">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="">Id Penerimaan</label>
				<input type="text" name="id_penerimaan" class="form-control" value="<?php echo e($penerimaan[0]->id_penerimaan); ?>" readonly>
			</div>
			<div class="form-group">
				<label for="editTglTerima">Tanggal Terima</label>
				<input type="date" name="receiveDate" class="form-control" value="<?php echo e($penerimaan[0]->tgl_penerimaan); ?>">
			</div>
			<div class="form-group">
				<label for="editJmlBuku">Jumlah Buku</label>
				<input type="text" name="total_rec_book" class="form-control" value="<?php echo e($penerimaan[0]->jml_buku_diterima); ?>">
			</div>
			<div class="form-group">
				<label for="editKet">Keterangan</label>
				<input type="text" name="p_s" class="form-control" value="<?php echo e($penerimaan[0]->ket); ?>">
			</div>
			<div class="form-group">
				<label for="inputAsal">Asal Buku</label>
				<select name="source" id="" class="form-control">
					<?php $__currentLoopData = $asal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($a->id_asal); ?>" <?php echo e($penerimaan[0]->id_asal == $a->id_asal ? 'selected' : ''); ?>><?php echo e($a->asal); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			<div class="form-group">
				<label for="inputNama">Nama Pegawai</label>
				<select name="nip" id="" class="form-control">
					<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($p->nip); ?>" <?php echo e($penerimaan[0]->nip == $p->nip ? 'selected' : ''); ?>><?php echo e($p->nip); ?> - <?php echo e($p->nama_pegawai); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('admin/layout/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/penerimaan/editPenerimaan.blade.php ENDPATH**/ ?>