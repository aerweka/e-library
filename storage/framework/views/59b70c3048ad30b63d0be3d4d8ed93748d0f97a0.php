<?php $__env->startSection('page title', 'Data Eksemplar Buku'); ?>
<?php $__env->startSection('title', 'Data Eksemplar Buku'); ?>
<?php $__env->startSection('breadcrump'); ?>
<li class="breadcrumb-item"><a href="/index">Home</a></li>
<li class="breadcrumb-item active">Data Eksemplar Buku</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Data Eksemplar Buku</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<!--<div class="card-body table-responsive p-0" style="height: 300px;">-->
	<div class="card-body">
		<!--<table class="table table-head-fixed text-nowrap">-->
		<table id="dataTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="15%">Kode Buku</th>
					<th>N0 ISBN - Judul Buku</th>
					<th width="10%">Status</th>
					<th width="10%">Kondisi</th>
					<th width="7%">Edit</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $eksemplar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($data->kode_buku); ?></td>
					<?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($data->no_isbn == $b->no_isbn): ?>
					<td><?php echo e($b->no_isbn); ?> - <a style="font-weight: bold;"><?php echo e($b->judul_buku); ?></a>
					</td>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php if($data->status == '1'): ?>
					<td>Ada</td>
					<?php elseif($data->status == '0'): ?>
					<td>Kosong</td>
					<?php else: ?>
					<td>Hilang</td>
					<?php endif; ?>
					<?php if($data->kondisi_eksemplar == '1'): ?>
					<td>Baik</td>
					<?php else: ?>
					<td>Tidak Baik</td>
					<?php endif; ?>
					<td>
						<a style="color:rgb(44, 47, 51);" class="fa fa-pencil-square" aria-hidden="true" id="edit" href="/eksemplar/editEksemplar/<?php echo e($data->kode_buku); ?>/<?php echo e($data->no_isbn); ?>"></a>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
	<!-- <div class="card-footer">
		<a href="/eksemplar/addEksemplar"><b>Tambah Data Eksemplar Buku</b></a>
	</div> -->
	<!-- /.card-footer-->
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/eksemplar/pageEksemplar.blade.php ENDPATH**/ ?>