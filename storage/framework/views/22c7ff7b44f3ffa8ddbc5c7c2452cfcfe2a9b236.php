<?php $__env->startSection('page title', 'Data Peminjaman'); ?>
<?php $__env->startSection('title', 'Data Peminjaman'); ?>
<?php $__env->startSection('breadcrump'); ?>
<li class="breadcrumb-item"><a href="/index">Home</a></li>
<li class="breadcrumb-item active">Data Peminjaman</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Data Peminjaman</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<!--<div class="card-body table-responsive p-0" style="height: 300px;">-->
	<div class="card-body">
		<div class="row">
			<div class="col">
				<a href="/peminjaman/addPeminjaman"><button class="btn btn-primary btn-sm mb-3">Tambah</button></a>
			</div>
		</div>
		<!--<table class="table table-head-fixed text-nowrap">-->
		<table id="dataTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Id Peminjaman</th>
					<th>Jumlah Buku</th>
					<th>Tanggal Pinjam</th>
					<th>Peminjam</th>
					<th>Petugas</th>
					<th width="7%">Edit</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($data->id_peminjaman); ?></td>
					<td><?php echo e($data->jml_buku); ?></td>
					<td><?php echo e($data->tgl_pinjam); ?></td>
					<?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($data->nis_nip == $a->nis_nip): ?>
					<td><?php echo e($a->nama_anggota); ?></td>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($data->nip == $p->nip): ?>
					<td><?php echo e($p->nama_pegawai); ?></td>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<td>
						<a style="color:rgb(44, 47, 51);" class="fa fa-pencil-square" aria-hidden="true" id="delete" href="/peminjaman/editPeminjaman/<?php echo e($data->id_peminjaman); ?>"></a>
						<!-- Button trigger modal -->
						<!-- <a type="button" class="fa fa-info-circle ml-2 detPeminjaman" data-toggle="modal" data-target="#detailModal" data-id="<?php echo e($data->id_peminjaman); ?>"></a> -->
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="detailModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<h5 class="modal-title" id="judulModal">Detail Peminjaman</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="kode_buku">Kode Buku</label>
					<input type="text" class="form-control" name="kode_buku" id="kode_buku">
				</div>
				<div class="form-group">
					<label for="id_peminjaman">Id Peminjaman</label>
					<input type="text" class="form-control" name="id_peminjaman" id="id_peminjaman">
				</div>
				<div class="form-group">
					<label for="statusPinjam">Status Pinjam</label>
					<select name="status_peminjaman" id="status_peminjaman" class="form-control">
						<option value="1">Terpinjam</option>
						<option value="0">Kembali</option>
					</select>
				</div>
				<div class="form-group">
					<label for="denda_perbuku">Denda per-Buku</label>
					<input type="number" class="form-control" name="denda_perbuku" id="denda_perbuku">
				</div>
				<div class="form-group">
					<label for="tgl_harusKembali">Tanggal Harus Kembali</label>
					<input type="date" class="form-control" name="tgl_harusKembali" id="tgl_harusKembali">
				</div>
				<div class="form-group">
					<label for="tgl_kembali">Tanggal Kembali</label>
					<input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali">
				</div>
				<div class="form-group">
					<label for="perpanjangan">Perpanjangan</label>
					<input type="number" class="form-control" name="perpanjangan" id="perpanjangan">
				</div>
				<div class="form-group">
					<label for="status_verif">Status Terverifikasi</label>
					<select name="status_verif" id="status_verif" class="form-control">
						<option value="1">Terverifikasi</option>
						<option value="0">Belum Terverifikasi</option>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Understood</button>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/peminjaman/pagePeminjaman.blade.php ENDPATH**/ ?>