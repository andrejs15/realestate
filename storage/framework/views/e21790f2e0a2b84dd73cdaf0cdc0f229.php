
<div class="image-box-wrapper flex">
    <?php $__currentLoopData = $houses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $house): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="main-image-box">
        <img src="<?php echo e(asset($house['imagePath'])); ?>" alt="" width="376" height="auto">
        <p><?php echo e($house['price']); ?></p>
        <span><?php echo e($house['address']); ?></span>
        <div class="rooms">
            <i class="fa-solid fa-bath"></i> <span><?php echo e($house['baths']); ?></span>
            <i class="fa-solid fa-bed"></i> <span><?php echo e($house['rooms']); ?></span>
            <i class="fa-solid fa-arrows-alt"></i> <span><?php echo e($house['size']); ?>.ft²</span>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\laragon\www\prva\resources\views/components/main-image-box.blade.php ENDPATH**/ ?>