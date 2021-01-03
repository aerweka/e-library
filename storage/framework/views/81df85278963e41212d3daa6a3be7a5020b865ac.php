<?php $__env->startSection('page title', 'Tambah Peminjaman'); ?>
<?php $__env->startSection('title', 'Tambah Peminjaman'); ?>
<?php $__env->startSection('breadcrump'); ?>
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Tambah Peminjaman</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Tambah Peminjaman</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/peminjaman/insertData" method="post" id="addPeminjaman">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="inputJml_buku">Jumlah Buku</label>
				<input type="text" required="required" name="jml_buku" class="form-control" placeholder="Masukkan Jumlah Buku yang Disewa">
			</div>
			<div class="form-group">
				<label for="inputTgl_pinjam">Tanggal Pinjam</label>
				<input type="date" required="required" name="tgl_pinjam" id="datePicker" class="form-control" placeholder="Pilih Tanggal sewa">
			</div>
			<div class="form-group">
				<label for="inputBuku">Pilih Buku</label>
				<select name="kode_buku" id="kode_buku" class="form-control select2" style="width: 100%;" required>
					<option selected disabled>Pilih Buku</option>
					<?php $__currentLoopData = $eksemplar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($e->status == 1): ?>
					<option value="<?php echo e($e->kode_buku); ?>"><?php echo e($e->kode_buku); ?> - <?php echo e($e->judul_buku); ?></option>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			<div class="form-group">
				<label for="inputAnggota">Penyewa</label>
				<select name="nis_nip" id="nis_nip" class="form-control select2" style="width: 100%;" required>
					<option selected disabled>Pilih Data Penyewa</option>
					<?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($a->nis_nip); ?>"><?php echo e($a->nis_nip); ?> - <?php echo e($a->nama_anggota); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			<div class="form-group">
				<label for="inputPegawai">Pegawai</label>
				<select name="nip" id="nip" class="form-control" required>
					<option selected disabled>Pilih Petugas</option>
					<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($p->nip); ?>"><?php echo e($p->nip); ?> - <?php echo e($p->nama_pegawai); ?></option>
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
				title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
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
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/peminjaman/addPeminjaman.blade.php ENDPATH**/ ?>