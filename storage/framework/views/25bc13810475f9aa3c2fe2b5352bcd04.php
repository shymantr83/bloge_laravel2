<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="userId" content="<?php echo e(auth()->check() ? auth()->id() : ''); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <meta name="description" content="">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/plugins.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">
    <link href="<?php echo e(asset('frontend/js/bootstrap-fileinput/css/fileinput.min.css')); ?>" media="all" rel="stylesheet" type="text/css" />

    <!-- Modernizer js -->
    <script src="<?php echo e(asset('frontend/js/vendor/modernizr-3.5.0.min.js')); ?>"></script>

    <?php echo $__env->yieldContent('style'); ?>
</head>
<body>
    <div id="app">
        <div class="wrapper" id="wrapper">

            <?php echo $__env->make('partial.frontend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <main>
                <?php echo $__env->make('partial.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
            </main>

            <?php echo $__env->make('partial.frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/active.js')); ?>"></script>

    <script src="<?php echo e(asset('frontend/js/bootstrap-fileinput/js/plugins/piexif.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/bootstrap-fileinput/js/plugins/sortable.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/bootstrap-fileinput/js/plugins/purify.min.js')); ?>"></script>

    <script src="<?php echo e(asset('frontend/js/bootstrap-fileinput/js/fileinput.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/bootstrap-fileinput/themes/fa/theme.js')); ?>"></script>


    <script src="<?php echo e(asset('frontend/js/custom.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\bloge_laravel\resources\views/layouts/app-auth.blade.php ENDPATH**/ ?>