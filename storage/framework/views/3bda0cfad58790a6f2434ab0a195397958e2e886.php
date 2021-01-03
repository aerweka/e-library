<?php $__env->startSection('page title', 'Tambah Penerimaan'); ?>
<?php $__env->startSection('title', 'Tambah Penerimaan'); ?>
<?php $__env->startSection('breadcrump'); ?>
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Tambah Penerimaan</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Tambah Penerimaan</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/penerimaan/insertData" method="post" id="addPenerimaan">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="inputJmlBuku">Tanggal Terima</label>
				<input id="datePicker" type="date" name="receiveDate" class="form-control" placeholder="Masukkan tanggal terima">
			</div>
			<div class="form-group">
				<label for="inputJmlBuku">Jumlah Buku</label>
				<input type="text" name="total_rec_book" class="form-control" placeholder="Masukkan jumlah buku">
			</div>
			<div class="form-group">
				<label for="inputKeterangan">Keterangan</label>
				<input type="text" name="p_s" class="form-control" placeholder="Masukkan keterangan">
			</div>
			<div class="form-group">
				<label for="inputPegawai">Pegawai Penerima</label>
				<select name="nip" id="nip" class="form-control">
					<option value="#" disabled selected>Pilih penerima</option>
					<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($p->nip); ?>" name="nip"><?php echo e($p->nip); ?> - <?php echo e($p->nama_pegawai); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			<div class="form-group">
				<label for="inputAsal">Asal Buku</label>
				<select name="source" id="asal" class="form-control">
					<option value="" disabled selected>Pilih asal buku</option>
					<?php $__currentLoopData = $asal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($a->id_asal); ?>" name="source"><?php echo e($a->asal); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
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
				title: 'Data sukses disubmit'
			})
		});
	});

	$(document).ready(function() {
		$('#addPenerimaan').validate({
			rules: {
				receiveDate: {
					required: true,
					date: true
				},
				total_rec_book: {
					required: true
				},
				nip: {
					required: true
				},
				source: {
					required: true
				}
			},
			messages: {
				receiveDate: {
					required: "Harap masukkan tanggal terima!",
				},
				total_rec_book: "Harap masukkan jumlah buku yang diterima!",
				nip: {
					required: "Harap masukkan pegawai yang menerima!"
				},
				source: {
					required: "Harap masukkan asal buku!"
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
<?php echo $__env->make('admin/layout/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/penerimaan/addPenerimaan.blade.php ENDPATH**/ ?>