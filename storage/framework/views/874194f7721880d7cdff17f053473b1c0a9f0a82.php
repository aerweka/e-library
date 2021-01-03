<?php $__env->startSection('tittle','Histori Peminjaman'); ?>
<?php $__env->startSection('page title', 'Histori Peminjaman'); ?>
<?php $__env->startSection('title', 'Histori Peminjaman'); ?>
<?php $__env->startSection('breadcrump'); ?>
<li class="breadcrumb-item"><a href="/index">Home</a></li>
<li class="breadcrumb-item active">Data Peminjaman</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_css'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Histori Peminjaman</h3>
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
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id peminjaman</th>
                    <th>ISBN Buku</th>
                    <th>Status peminjaman</th>
                    <th>Tanggal Harus Kembali</th>
                    <th>Tanggal Kembali</th>
                    <th>Perpanjangan</th>
                    <th>Status Verifikasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>pnj000001</td>
                    <td>9786020380711</td>
                    <td>Dipinjam</td>
                    <td>19 Agustus 2001</td>
                    <td>-</td>
                    <td>Tidak</td>
                    <td>terverivikasi</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_script'); ?>
<!-- DataTables -->
<script src="<?php echo e(URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/peminjaman/historiPeminjaman.blade.php ENDPATH**/ ?>