<section class="main-section">
    <div class="main-header flex">
        <h3>Showing xxx search results</h3>

        <div class="sort-container flex">
            <span class="sort-label">Sort by:</span>
            <select id="sort-select">
                <option value="newest">Newest</option>
                <option value="oldest">Oldest</option>
                <option value="popular">Popular</option>

            </select>
        </div>
    </div>

    <div class="main-image-section flex">
        <?php if (isset($component)) { $__componentOriginalf116c0a7408c813dd4708715d148a01f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf116c0a7408c813dd4708715d148a01f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main-image-box','data' => ['houses' => [
                      ['imagePath' => 'img/house1.png', 'price' => '$2,000,000', 'address' => '100 East, 21th Street, San Francisco',
                      'baths' => '2', 'rooms' => '4', 'size' => '3000'],
                      ['imagePath' => 'img/house2.png', 'price' => '$1,000,000', 'address' => '100 North, 15th Street, San Francisco',
                      'baths' => '2', 'rooms' => '2', 'size' => '1500'],
                         ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('main-image-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['houses' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                      ['imagePath' => 'img/house1.png', 'price' => '$2,000,000', 'address' => '100 East, 21th Street, San Francisco',
                      'baths' => '2', 'rooms' => '4', 'size' => '3000'],
                      ['imagePath' => 'img/house2.png', 'price' => '$1,000,000', 'address' => '100 North, 15th Street, San Francisco',
                      'baths' => '2', 'rooms' => '2', 'size' => '1500'],
                         ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf116c0a7408c813dd4708715d148a01f)): ?>
<?php $attributes = $__attributesOriginalf116c0a7408c813dd4708715d148a01f; ?>
<?php unset($__attributesOriginalf116c0a7408c813dd4708715d148a01f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf116c0a7408c813dd4708715d148a01f)): ?>
<?php $component = $__componentOriginalf116c0a7408c813dd4708715d148a01f; ?>
<?php unset($__componentOriginalf116c0a7408c813dd4708715d148a01f); ?>
<?php endif; ?>
    </div>

    <div class="main-image-section flex">
        <?php if (isset($component)) { $__componentOriginalf116c0a7408c813dd4708715d148a01f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf116c0a7408c813dd4708715d148a01f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main-image-box','data' => ['houses' => [
                      ['imagePath' => 'img/house3.png', 'price' => '$1,500,000', 'address' => '100 West, 15th Street, San Francisco',
                      'baths' => '2', 'rooms' => '2', 'size' => '2500'],
                      ['imagePath' => 'img/house4.png', 'price' => '$1,200,000', 'address' => '100 West, 15th Street, San Francisco',
                      'baths' => '2', 'rooms' => '2', 'size' => '2500'],
                         ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('main-image-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['houses' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                      ['imagePath' => 'img/house3.png', 'price' => '$1,500,000', 'address' => '100 West, 15th Street, San Francisco',
                      'baths' => '2', 'rooms' => '2', 'size' => '2500'],
                      ['imagePath' => 'img/house4.png', 'price' => '$1,200,000', 'address' => '100 West, 15th Street, San Francisco',
                      'baths' => '2', 'rooms' => '2', 'size' => '2500'],
                         ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf116c0a7408c813dd4708715d148a01f)): ?>
<?php $attributes = $__attributesOriginalf116c0a7408c813dd4708715d148a01f; ?>
<?php unset($__attributesOriginalf116c0a7408c813dd4708715d148a01f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf116c0a7408c813dd4708715d148a01f)): ?>
<?php $component = $__componentOriginalf116c0a7408c813dd4708715d148a01f; ?>
<?php unset($__componentOriginalf116c0a7408c813dd4708715d148a01f); ?>
<?php endif; ?>
    </div>
</section>

<?php /**PATH C:\laragon\www\prva\resources\views/partials/article.blade.php ENDPATH**/ ?>