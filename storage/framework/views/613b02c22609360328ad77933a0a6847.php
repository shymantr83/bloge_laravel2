<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">





























<body>
    <div id="app">
        <div class="wrapper" id="wrapper">
            <?php echo $__env->make('partial/frontend/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main >
            <?php echo $__env->yieldContent('content'); ?>
        </main>
            <?php echo $__env->make('partial/frontend/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    </div>
    <!-- JS Files -->

    <script src="<?php echo e(asset('frontend/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/active.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\bloge_laravel\resources\views/SEGO/app.blade.php ENDPATH**/ ?>