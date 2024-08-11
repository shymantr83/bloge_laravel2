<?php $__env->startSection('content'); ?>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
























































                <header>
                    <div class="container">
                        <h1>SGEO</h1>
                        <p>smart guide for engineering offices</p>
                    </div>
                </header>
                <!--    end  header -->
                <!-- start content -->
                <section class="containers" id="About">
                    <div class="row">
                        <div class="img col-lg-6 col-sm-12">
                            <img src="<?php echo e(asset('frontend/images/img/IMG-20231014-WA0028.jpg')); ?>"  class="img-fluid"alt="">

                        </div>

                        <div class="infro col-lg-6 col-sm-12">
                            <h2> About SGEO</h2>
                            <p>The SGEO platform provides speedy communication with <br>engineering service providers,
                             <br>   which are companies or engineering offices</p>
                        </div>
                    </div>

                </section>

                <section class="containers">
                    <div class="row">
                        <div class="img col-lg-6 col-sm-12">
                            <img src="<?php echo e(asset('frontend/images/img/IMG-20231014-WA0030.jpg')); ?>"  class="img-fluid"alt="">

                        </div>
                        <div class="infro col-lg-6 col-sm-12">
                            <h3> Implementing projects with us</h3>
                            <p>No need to worry about the details. Here, you will find what you want in everything you need to clearly define, as the platform provides:
                                Consulting services from the best engineering offices<br>
                                We also provide comparisons between the best engineering offices in terms of prices,
                                offers, evaluation and previous experiences</p>
                            <a href= "<?php echo e(route('SEGO.login')); ?>"><button class="btn">Implement your project</button></a>
                        </div>

                    </div>

                </section>

                <!-- end content -->

                    <script src="<?php echo e(asset('frontend/Js/external/jquery.slim.min.js')); ?>"></script>
                    <script src="<?php echo e(asset('frontend/Js/external/bootstrap.bundle.js')); ?>"></script>
                </div>



    </body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloge_laravel\resources\views/SEGO/SGEO.blade.php ENDPATH**/ ?>