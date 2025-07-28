<div class="form-section flex">
    <h3><?php echo e($title); ?> </h3>
    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        $isChecked = isset($checked) && in_array($value, $checked)
        ?>
<label>
    <input type="checkbox" name="<?php echo e($name); ?>" value="<?php echo e($value); ?>"  <?php if($isChecked): ?> checked <?php endif; ?>>
    <?php echo e($label); ?>

</label>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\laragon\www\prva\resources\views/components/form-section-check.blade.php ENDPATH**/ ?>