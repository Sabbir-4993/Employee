<?php echo $__env->make('admin.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="layoutSidenav_content">
    <main>

        <?php echo $__env->yieldContent('content'); ?>

    </main>

<?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\EMS\Employee\resources\views/admin/layouts/master.blade.php ENDPATH**/ ?>