<?php $__env->startSection('page title', 'Data Penerimaan'); ?>
<?php $__env->startSection('title', 'Data Penerimaan'); ?>
<?php $__env->startSection('breadcrump'); ?>
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Data Penerimaan</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Data Penerimaan</h3>
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
				<a href="/penerimaan/addPenerimaan"><button class="btn btn-primary btn-sm mb-3">Tambah</button></a>
			</div>
		</div>
		<!--<table class="table table-head-fixed text-nowrap">-->
		<table id="dataTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Id Penerimaan</th>
					<th>Tanggal Terima</th>
					<th>Jumlah Buku</th>
					<th>Keterangan</th>
					<th>Asal Buku</th>
					<th>Pegawai Penerima</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $penerimaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($data->id_penerimaan); ?></td>
					<td><?php echo e($data->tgl_penerimaan); ?></td>
					<td><?php echo e($data->jml_buku_diterima); ?></td>
					<td><?php echo e($data->ket); ?></td>
					<td><?php echo e($data->id_asal); ?></td>
					<td><?php echo e($data->nip); ?></td>
					<td>
						<a style="color:rgb(44, 47, 51);" class="fa fa-pencil-square" aria-hidden="true" id="delete" href="/penerimaan/editPenerimaan/<?php echo e($data->id_penerimaan); ?>"></a>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
	<!-- <div class="card-footer">
		<a href="/penerimaan/addPenerimaan"><b>Tambah Data Penerimaan</b></a>
	</div> -->
	<!-- /.card-footer-->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/penerimaan/pagePenerimaan.blade.php ENDPATH**/ ?>