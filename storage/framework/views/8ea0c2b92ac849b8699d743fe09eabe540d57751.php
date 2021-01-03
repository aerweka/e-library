<?php $__env->startSection('page title', 'Edit Data Eksemplar Buku'); ?>
<?php $__env->startSection('title', 'Edit Data Eksemplar Buku'); ?>
<?php $__env->startSection('breadcrump'); ?>
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Edit Data Eksemplar Buku</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Edit Data Eksemplar Buku</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/eksemplar/updateData" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="inputKB">Kode Buku</label>
				<input type="text" name="kode_buku" class="form-control" value="<?php echo e($eksemplar[0]->kode_buku); ?>" readonly>
			</div>
			<div class="form-group">
				<label for="inputTitle">Buku</label>
				<input type="text" name="no_isbn" class="form-control" value="<?php echo e($eksemplar[0]->no_isbn); ?> - <?php echo e($buku[0]->judul_buku); ?>" readonly>
				<!-- <select class="form-control" name="no_isbn" id="no_isbn" value="$eksemplar[0]->no_isbn">
					<option value="" disabled selected>Pilih buku</option>
					<?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option name="no_isbn" id="no_isbn" value="<?php echo e($b->no_isbn); ?>" <?php echo e($eksemplar[0]->no_isbn == $b->no_isbn ? 'selected' : ''); ?>><?php echo e($b->no_isbn); ?> - <?php echo e($b->judul_buku); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select> -->
			</div>
			<div class="form-group">
				<label for="inputStatus">Status</label>
				<select name="status" id="status" class="form-control" value="$eksemplar->status">
					<option value="" disabled selected>Pilih Status Eksemplar Buku</option>
					<option value="1" <?php echo e($eksemplar[0]->status == '1' ? 'selected' : ''); ?>>Ada</option>
					<option value="0" <?php echo e($eksemplar[0]->status == '0' ? 'selected' : ''); ?>>Kosong</option>
					<option value="8" <?php echo e($eksemplar[0]->status == '8' ? 'selected' : ''); ?>>Hilang</option>
				</select>
			</div>
			<div class="form-group">
				<label for="inputCondition">Kondisi</label>
				<select name="condition" class="form-control" value="$eksemplar->kondisi_eksemplar">
					<option value="1" <?php echo e($eksemplar[0]->kondisi_eksemplar == '1' ? 'selected' : ''); ?>>Baik</option>
					<option value="0" <?php echo e($eksemplar[0]->kondisi_eksemplar == '0' ? 'selected' : ''); ?>>Tidak Baik</option>
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
				title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/eksemplar/editEksemplar.blade.php ENDPATH**/ ?>