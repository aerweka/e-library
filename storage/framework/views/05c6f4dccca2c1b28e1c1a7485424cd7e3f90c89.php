<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Insert</title>
    <?php echo $__env->make('admin.layout.css_global', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div class="col">
        <form action="<?php echo e(route('insert_trial')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
            <input type="number" name="count" value="<?php echo e($count); ?>">
            <div class="form-group">
                <label for="inputJmlBuku">Kode Barang</label>
                <input id="datePicker" type="text" name="kode_barang" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputJmlBuku">Nama</label>
                <input id="datePicker" type="text" name="nama" class="form-control">
            </div>

            <input type="submit" value="tambah" class="btn btn-outline-primary">
        </form>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/trial/coba.blade.php ENDPATH**/ ?>