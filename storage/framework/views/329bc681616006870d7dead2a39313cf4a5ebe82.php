<?php $__env->startSection('page title', 'Data Anggota'); ?>
<?php $__env->startSection('title', 'Data Anggota'); ?>
<?php $__env->startSection('breadcrump'); ?>
<li class="breadcrumb-item"><a href="/index">Home</a></li>
<li class="breadcrumb-item active">Data Anggota</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Data Anggota</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col">
				<a href="/anggota/addAnggota"><button class="btn btn-primary btn-sm mb-3">Tambah</button></a>
			</div>
		</div>
		<table id="dataTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nis_Nip</th>
					<th>Nama</th>
					<th>Tahun Masuk</th>
					<th>Kelas</th>
					<th>Username</th>
					<th>Password</th>
					<th>Status</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($data->nis_nip); ?></td>
					<td><?php echo e($data->nama_anggota); ?></td>
					<td><?php echo e($data->tahun_masuk); ?></td>
					<td><?php echo e($data->kelas); ?></td>
					<td><?php echo e($data->username); ?></td>
					<td><?php echo e($data->password); ?></td>
					<td><?php echo e($data->status); ?></td>
					<td>
						<a style="color:rgb(44, 47, 51);" class="fa fa-pencil-square" aria-hidden="true" id="delete" href="/anggota/editAnggota/<?php echo e($data->nis_nip); ?>"></a>
						<a style="color:rgb(44, 47, 51);" class="fa fa-trash ml-2" aria-hidden="true" id="delete" href="/anggota/delete/<?php echo e($data->nis_nip); ?>" onclick="return confirm('yakin?')"></a>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
	<!-- <div class="card-footer">

	</div> -->
	<!-- /.card-footer-->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/anggota/pageAnggota.blade.php ENDPATH**/ ?>