<?php if (! $__env->hasRenderedOnce('05a309cb-4f15-46cf-82ce-2b324030ff6f')): $__env->markAsRenderedOnce('05a309cb-4f15-46cf-82ce-2b324030ff6f');
$__env->startPush(config('pagebuilder.site_style_var')); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/theme/edulia/packages/carousel/owl.carousel.min.css')); ?>">
<?php $__env->stopPush(); endif; ?>

<?php if (isset($component)) { $__componentOriginal4dea201d382b663324e524ef479406ce = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4dea201d382b663324e524ef479406ce = $attributes; } ?>
<?php $component = App\View\Components\HomePageSlider::resolve(['count' => pagesetting('home_slider_count')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-page-slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\HomePageSlider::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4dea201d382b663324e524ef479406ce)): ?>
<?php $attributes = $__attributesOriginal4dea201d382b663324e524ef479406ce; ?>
<?php unset($__attributesOriginal4dea201d382b663324e524ef479406ce); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4dea201d382b663324e524ef479406ce)): ?>
<?php $component = $__componentOriginal4dea201d382b663324e524ef479406ce; ?>
<?php unset($__componentOriginal4dea201d382b663324e524ef479406ce); ?>
<?php endif; ?>

<?php if (! $__env->hasRenderedOnce('aebe327d-6b04-4318-8c3f-346b75b4d969')): $__env->markAsRenderedOnce('aebe327d-6b04-4318-8c3f-346b75b4d969');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
    <script src="<?php echo e(asset('public/theme/edulia/packages/carousel/owl.carousel.min.js')); ?>"></script>
    <script>
        $('.hero_area_slider').owlCarousel({
            nav: true,
            navText: ['<i class="far fa-angle-left"></i>', '<i class="far fa-angle-right"></i>'],
            dots: false,
            items: 1,
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\xampp\htdocs\avilearning\resources\views/themes/edulia/pagebuilder/home-slider/view.blade.php ENDPATH**/ ?>