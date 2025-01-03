<?php if (! $__env->hasRenderedOnce('b1a7e0af-d7b7-412a-9760-c45716f921aa')): $__env->markAsRenderedOnce('b1a7e0af-d7b7-412a-9760-c45716f921aa');
$__env->startPush(config('pagebuilder.site_style_var')); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/theme/edulia/packages/magnific/magnific-popup.min.css')); ?>">
<?php $__env->stopPush(); endif; ?>
<div class="section_padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="section_title">
                    <span class="section_title_meta"><?php echo e(pagesetting('video_sub_heading')); ?></span>
                    <h2><?php echo e(pagesetting('video_heading')); ?></h2>
                </div>
            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginal4ff5332b173ace74fedc0abfca218066 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4ff5332b173ace74fedc0abfca218066 = $attributes; } ?>
<?php $component = App\View\Components\VideoGallery::resolve(['column' => pagesetting('video_gallery_column'),'count' => pagesetting('video_gallery_count')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('video-gallery'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\VideoGallery::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4ff5332b173ace74fedc0abfca218066)): ?>
<?php $attributes = $__attributesOriginal4ff5332b173ace74fedc0abfca218066; ?>
<?php unset($__attributesOriginal4ff5332b173ace74fedc0abfca218066); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4ff5332b173ace74fedc0abfca218066)): ?>
<?php $component = $__componentOriginal4ff5332b173ace74fedc0abfca218066; ?>
<?php unset($__componentOriginal4ff5332b173ace74fedc0abfca218066); ?>
<?php endif; ?>
    </div>
</div>
<?php if (! $__env->hasRenderedOnce('33114412-9402-4861-b360-507667b57bf3')): $__env->markAsRenderedOnce('33114412-9402-4861-b360-507667b57bf3');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
    <script>
        $(document).ready(function() {
            $('.gallery_item.video').magnificPopup({
                type: 'iframe',
            });
        });
    </script>
    <script src="<?php echo e(asset('public/theme/edulia/packages/magnific/jquery.magnific-popup.min.js')); ?>"></script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\xampp\htdocs\avilearning\resources\views/themes/edulia/pagebuilder/video-gallery/view.blade.php ENDPATH**/ ?>