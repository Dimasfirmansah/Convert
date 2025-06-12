<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        img {
            width: 100%;
            height: auto;
            page-break-after: always;
        }
    </style>
</head>
<body>
    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img src="<?php echo e($img); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\Project-Inggris\resources\views/pdf.blade.php ENDPATH**/ ?>