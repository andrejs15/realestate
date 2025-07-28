<div class="form-section flex form-section-select">
    <div class="titles">
        <h3><?php echo e($titleLeft); ?></h3>
        <h3><?php echo e($titleRight); ?></h3>
    </div>

    <div class="selects">
        <select>
            <?php $__currentLoopData = $select1Options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($value); ?>"><?php echo e($value); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <select>
            <?php $__currentLoopData = $select2Options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($value); ?>"><?php echo e($value); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

</div>
<?php /**PATH C:\laragon\www\prva\resources\views/components/form-section-select.blade.php ENDPATH**/ ?>