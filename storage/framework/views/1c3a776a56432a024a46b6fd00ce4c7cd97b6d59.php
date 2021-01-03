<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php echo $__env->make('admin.layout.css_global', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <form action="/formAdd" method="post">
        <?php echo csrf_field(); ?>
        <label for="">Jumlah Looping</label>
        <input type="number" class="form-control" name="count">
        <input type="submit" value="kirim">
    </form>
</body>

</html><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/trial/one.blade.php ENDPATH**/ ?>