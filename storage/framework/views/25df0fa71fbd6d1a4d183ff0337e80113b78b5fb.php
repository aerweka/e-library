<?php $__env->startSection('page title', 'Edit Data Buku'); ?>
<?php $__env->startSection('title', 'Edit Data Buku'); ?>
<?php $__env->startSection('breadcrump'); ?>
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Edit Jenis Buku</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Edit Jenis Buku</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/buku/updateData" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="inputISBN">No. ISBN</label>
				<input type="text" name="no_isbn" class="form-control" value="<?php echo e($buku[0]->no_isbn); ?>" readonly>
			</div>
			<div class="form-group">
				<label for="inputTitle">Judul Buku</label>
				<input type="text" name="title" class="form-control" value="<?php echo e($buku[0]->judul_buku); ?>">
			</div>
			<div class="form-group">
				<label for="inputYear">Tahun Terbit</label>
				<input type="text" name="year" class="form-control" value="<?php echo e($buku[0]->tahun_terbit); ?>">
			</div>
			<div class="form-group">
				<label for="inputAuthor">Penulis</label>
				<input type="text" name="author" class="form-control" value="<?php echo e($buku[0]->penulis); ?>">
			</div>
			<div class="form-group">
				<label for="inputPrint">Cetakan</label>
				<input type="text" name="print" class="form-control" value="<?php echo e($buku[0]->cetakan_ke); ?>">
			</div>
			<div class="form-group">
				<label for="inputPrice">Harga</label>
				<input type="text" name="price" class="form-control" value="<?php echo e($buku[0]->harga); ?>">
			</div>
			<div class="form-group">
				<label for="inputCopy">Eksemplar</label>
				<input type="text" name="copy" class="form-control" value="<?php echo e($buku[0]->jml_eksemplar); ?>">
			</div>
			<div class="form-group">
				<label for="inputCategory">Kategori</label>
				<input type="text" name="category" class="form-control" value="<?php echo e($buku[0]->kategori_buku); ?>">
			</div>
			<div class="form-group">
				<label for="inputJB">Jenis Buku</label>
				<select name="id_jb" id="id_jb" class="form-control" value="$buku[0]->id_jb">
					<?php $__currentLoopData = $jenis_buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option name="id_jb" id="id_jb" value="<?php echo e($jb->id_jb); ?>" <?php echo e($buku[0]->id_jb == $jb->id_jb ? 'selected' : ''); ?>><?php echo e($jb->kode_jb); ?> - <?php echo e($jb->nama_jb); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			<div class="form-group">
				<label for="inputPenerbit">Penerbit</label>
				<select name="id_penerbit" class="form-control" value="$buku[0]->id_penerbit">
					<?php $__currentLoopData = $penerbit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option name="id_penerbit" id="id_penerbit" value="<?php echo e($p->id_penerbit); ?>" <?php echo e($buku[0]->id_penerbit == $p->id_penerbit ? 'selected' : ''); ?>><?php echo e($p->nama_penerbit); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			<div class="form-group">
				<label for="inputLang">Bahasa</label>
				<select name="id_bhs" class="form-control" value="$buku[0]->id_bhs">
					<?php $__currentLoopData = $bahasa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option name="id_bhs" id="id_bhs" value="<?php echo e($b->id_bhs); ?>" <?php echo e($buku[0]->id_bhs == $b->id_bhs ? 'selected' : ''); ?>><?php echo e($b->nama_bhs); ?></option>
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
				title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/DM_buku/editBuku.blade.php ENDPATH**/ ?>