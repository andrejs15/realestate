<!DOCTYPE html>
<html lang="sk">
<head>
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>
<body>
<div class="content flex">
    <div class="content-box ">
        <header class="flex">
            <?php echo $__env->make('partials.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </header>
        <main class="flex">
            <?php echo $__env->make('partials.left-bar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('partials.article', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <button id="toggle-map" class="fa fa-map-marker"></button>
    <div class="sidebar" id=sidebar-section">
        <img src="<?php echo e(asset('img/map.png')); ?>" alt="" width="463">
    </div>


</div>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\laragon\www\prva\resources\views/layouts/main.blade.php ENDPATH**/ ?>