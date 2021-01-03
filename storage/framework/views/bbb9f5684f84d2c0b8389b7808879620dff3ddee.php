<?php $__env->startSection('page title', 'Data Buku'); ?>
<?php $__env->startSection('title', 'Data Buku'); ?>
<?php $__env->startSection('breadcrump'); ?>
<li class="breadcrumb-item"><a href="/index">Home</a></li>
<li class="breadcrumb-item active">Data Buku</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Data Buku</h3>
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
				<a href="/buku/addBuku"><button class="btn btn-primary btn-sm mb-3">Tambah</button></a>
			</div>
		</div>
		<table id="dataTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No ISBN</th>
					<th>Judul Buku</th>
					<th>Tahun Terbit</th>
					<th>Penulis</th>
					<th>Cetakan</th>
					<th>Harga</th>
					<th>Eksemplar</th>
					<th>Kategori</th>
					<th>Jenis Buku</th>
					<th>Penerbit</th>
					<th>Bahasa</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($data->no_isbn); ?></td>
					<td><?php echo e($data->judul_buku); ?></td>
					<td><?php echo e($data->tahun_terbit); ?></td>
					<td><?php echo e($data->penulis); ?></td>
					<td><?php echo e($data->cetakan_ke); ?></td>
					<td><?php echo e($data->harga); ?></td>
					<td><?php echo e($data->jml_eksemplar); ?></td>
					<td><?php echo e($data->kategori_buku); ?></td>
					<td><?php echo e($data->id_jb); ?></td>
					<td><?php echo e($data->id_penerbit); ?></td>
					<td><?php echo e($data->id_bhs); ?></td>
					<td>
						<a style="color:rgb(44, 47, 51);" class="fa fa-pencil-square" aria-hidden="true" id="delete" href="/buku/editBuku/<?php echo e($data->no_isbn); ?>"></a>
						<a style="color:rgb(44, 47, 51);" class="fa fa-trash ml-2" aria-hidden="true" id="delete" href="/buku/delete/<?php echo e($data->no_isbn); ?>"></a>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/DM_buku/pageBuku.blade.php ENDPATH**/ ?>