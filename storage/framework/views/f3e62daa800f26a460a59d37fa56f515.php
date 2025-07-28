<aside>

    <div class="aside-header">
        <h3>Filters</h3>
        <div class="button-field">
            <button class="mobile-only" id="toggle-filters">
                Show filters
            </button>

            <button type="button" class="reset-form" id="reset-button">
                Reset filters
            </button>
            <span>5</span>
        </div>
    </div>

    <div class="checkbox-wrapper" id="filters">
        <form id="filter" action="#" method="get">
            <?php if (isset($component)) { $__componentOriginala96cee6643f6d7063d0ff31567f8d7e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala96cee6643f6d7063d0ff31567f8d7e5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-section-check','data' => ['title' => 'Property type','name' => 'property-type','options' => [
                    'house' => 'House',
                    'apartment' => 'Apartment',
                    'room' => 'Room',
                    'townhall' => 'Townhall',
                    'parking' => 'Parking'
                ],'checked' => [
                    'house'
                ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-section-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Property type','name' => 'property-type','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                    'house' => 'House',
                    'apartment' => 'Apartment',
                    'room' => 'Room',
                    'townhall' => 'Townhall',
                    'parking' => 'Parking'
                ]),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                    'house'
                ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala96cee6643f6d7063d0ff31567f8d7e5)): ?>
<?php $attributes = $__attributesOriginala96cee6643f6d7063d0ff31567f8d7e5; ?>
<?php unset($__attributesOriginala96cee6643f6d7063d0ff31567f8d7e5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala96cee6643f6d7063d0ff31567f8d7e5)): ?>
<?php $component = $__componentOriginala96cee6643f6d7063d0ff31567f8d7e5; ?>
<?php unset($__componentOriginala96cee6643f6d7063d0ff31567f8d7e5); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginala96cee6643f6d7063d0ff31567f8d7e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala96cee6643f6d7063d0ff31567f8d7e5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-section-check','data' => ['title' => 'Style of home','name' => 'style-of-home','options' => [
                    'a-frame' => 'A-Frame',
                    'bungalow' => 'Bungalow',
                    'cottage' => 'Cottage',
                    'dome' => ' Dome',
                    'spanish' => ' Spanish'
                ],'checked' => [
                    'bungalow'
                ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-section-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Style of home','name' => 'style-of-home','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                    'a-frame' => 'A-Frame',
                    'bungalow' => 'Bungalow',
                    'cottage' => 'Cottage',
                    'dome' => ' Dome',
                    'spanish' => ' Spanish'
                ]),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                    'bungalow'
                ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala96cee6643f6d7063d0ff31567f8d7e5)): ?>
<?php $attributes = $__attributesOriginala96cee6643f6d7063d0ff31567f8d7e5; ?>
<?php unset($__attributesOriginala96cee6643f6d7063d0ff31567f8d7e5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala96cee6643f6d7063d0ff31567f8d7e5)): ?>
<?php $component = $__componentOriginala96cee6643f6d7063d0ff31567f8d7e5; ?>
<?php unset($__componentOriginala96cee6643f6d7063d0ff31567f8d7e5); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal12ae6a17815ee94addb6c238681320e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal12ae6a17815ee94addb6c238681320e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-section-select','data' => ['titleLeft' => 'Min. price','titleRight' => 'Max. price','select1Options' => ['$1,500,000', '$1,000,000', '$500,000', 'Any'],'select2Options' => array_reverse(['$1,500,000', '$1,000,000', '$500,000', 'Any'])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-section-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titleLeft' => 'Min. price','titleRight' => 'Max. price','select1Options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['$1,500,000', '$1,000,000', '$500,000', 'Any']),'select2Options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(array_reverse(['$1,500,000', '$1,000,000', '$500,000', 'Any']))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal12ae6a17815ee94addb6c238681320e4)): ?>
<?php $attributes = $__attributesOriginal12ae6a17815ee94addb6c238681320e4; ?>
<?php unset($__attributesOriginal12ae6a17815ee94addb6c238681320e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12ae6a17815ee94addb6c238681320e4)): ?>
<?php $component = $__componentOriginal12ae6a17815ee94addb6c238681320e4; ?>
<?php unset($__componentOriginal12ae6a17815ee94addb6c238681320e4); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal12ae6a17815ee94addb6c238681320e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal12ae6a17815ee94addb6c238681320e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-section-select','data' => ['titleLeft' => 'Bedroom','titleRight' => 'Bathroom','select1Options' => ['Any', '1', '2', '3', '4'],'select2Options' => ['Any', '1', '2', '3', '4']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-section-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titleLeft' => 'Bedroom','titleRight' => 'Bathroom','select1Options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['Any', '1', '2', '3', '4']),'select2Options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['Any', '1', '2', '3', '4'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal12ae6a17815ee94addb6c238681320e4)): ?>
<?php $attributes = $__attributesOriginal12ae6a17815ee94addb6c238681320e4; ?>
<?php unset($__attributesOriginal12ae6a17815ee94addb6c238681320e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12ae6a17815ee94addb6c238681320e4)): ?>
<?php $component = $__componentOriginal12ae6a17815ee94addb6c238681320e4; ?>
<?php unset($__componentOriginal12ae6a17815ee94addb6c238681320e4); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal12ae6a17815ee94addb6c238681320e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal12ae6a17815ee94addb6c238681320e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-section-select','data' => ['titleLeft' => 'Size (Min)','titleRight' => 'Size (Max)','select1Options' => ['Any', '500 Sq.ft', '1000 Sq.ft', '1500 Sq.ft', '2000 Sq.ft'],'select2Options' => ['Any', '500 Sq.ft', '1000 Sq.ft', '1500 Sq.ft', '2000 Sq.ft']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-section-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titleLeft' => 'Size (Min)','titleRight' => 'Size (Max)','select1Options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['Any', '500 Sq.ft', '1000 Sq.ft', '1500 Sq.ft', '2000 Sq.ft']),'select2Options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['Any', '500 Sq.ft', '1000 Sq.ft', '1500 Sq.ft', '2000 Sq.ft'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal12ae6a17815ee94addb6c238681320e4)): ?>
<?php $attributes = $__attributesOriginal12ae6a17815ee94addb6c238681320e4; ?>
<?php unset($__attributesOriginal12ae6a17815ee94addb6c238681320e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12ae6a17815ee94addb6c238681320e4)): ?>
<?php $component = $__componentOriginal12ae6a17815ee94addb6c238681320e4; ?>
<?php unset($__componentOriginal12ae6a17815ee94addb6c238681320e4); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginala96cee6643f6d7063d0ff31567f8d7e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala96cee6643f6d7063d0ff31567f8d7e5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-section-check','data' => ['title' => 'Accessibility Features','name' => 'accesibility','options' => [
                    'extra-wide doorways' => 'Extra-wide doorways',
                    'ramps' => 'Ramps',
                    'grab bars' => 'Grab bars',
                    'lower counter heights' => 'Lower counter heights',
                    'spanish' => 'Spanish'
                ],'checked' => [
                    'extra-wide doorways'
                ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-section-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Accessibility Features','name' => 'accesibility','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                    'extra-wide doorways' => 'Extra-wide doorways',
                    'ramps' => 'Ramps',
                    'grab bars' => 'Grab bars',
                    'lower counter heights' => 'Lower counter heights',
                    'spanish' => 'Spanish'
                ]),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                    'extra-wide doorways'
                ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala96cee6643f6d7063d0ff31567f8d7e5)): ?>
<?php $attributes = $__attributesOriginala96cee6643f6d7063d0ff31567f8d7e5; ?>
<?php unset($__attributesOriginala96cee6643f6d7063d0ff31567f8d7e5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala96cee6643f6d7063d0ff31567f8d7e5)): ?>
<?php $component = $__componentOriginala96cee6643f6d7063d0ff31567f8d7e5; ?>
<?php unset($__componentOriginala96cee6643f6d7063d0ff31567f8d7e5); ?>
<?php endif; ?>
        </form>
    </div>
</aside>
<?php /**PATH C:\laragon\www\prva\resources\views/partials/left-bar.blade.php ENDPATH**/ ?>