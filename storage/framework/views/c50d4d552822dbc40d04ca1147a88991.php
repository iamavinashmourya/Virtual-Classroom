<?php if (! $__env->hasRenderedOnce('b3233751-29ec-4cae-82d2-dc0f4452248a')): $__env->markAsRenderedOnce('b3233751-29ec-4cae-82d2-dc0f4452248a');
$__env->startPush(config('pagebuilder.site_style_var')); ?>
    <style>
        iframe {
            width: 100% !important;
            height: 100% !important;
        }
        .google_map{
            height: 200px;
        }
    </style>
<?php $__env->stopPush(); endif; ?>
<div class="contacts_info mt-5">
    <p><?php echo pagesetting('google_map_editor'); ?></p>
    <div class="google_map w-100">
        <?php echo pagesetting('google_map_key'); ?>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\avilearning\resources\views/themes/edulia/pagebuilder/google-map/view.blade.php ENDPATH**/ ?>