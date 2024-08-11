<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
            <link href="<?php echo e(asset('frontend/css/external/all.min.css')); ?>" rel="stylesheet">
            <link href="<?php echo e(asset('frontend/css/external/bootstrap.css')); ?>" rel="stylesheet">
            <link href="<?php echo e(asset('frontend/css/style1.css')); ?>" rel="stylesheet">
            <title>SGEO</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">













                <nav>
                    <div class="nav">
                        <div class="container">
                            <a href="#"><i class="fa fa-search"></i></a>
                            <img class="logo" src="<?php echo e(asset('frontend/images/img/logo.PNG')); ?>" alt="" />
                            <div class="links">
                <span class="icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                                <ul>
                                    <?php if(Route::has('login')): ?>
                                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                            <?php if(auth()->guard()->check()): ?>
                                                <a href="<?php echo e(url('/home')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                            <?php else: ?>
                                                <li>   <a href="<?php echo e(route('login')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                                                <?php if(Route::has('register')): ?>
                                                   <li><a href="<?php echo e(route('register')); ?>" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>

                                    <li><a href="file:///E:/SGEO/index.html"><i class="fa fa-home"></i>Home</a></li>
                                    <li><a href="#About"><i class="fa fa-exclamation-triangle"></i>About</a></li>
                                    <li><a href="#Profile"> <i class="	fas fa-user-alt"></i>Profile</a></li>
                                    <li><a href="#Arabic"><i class="fas fa-language"></i>Arabic</a></li>
                                    <li><a href="#Favourite"><i class="fa fa-heart"></i>Favourite</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </nav>
                <!-- start header -->
                <header>
                    <div class="container">
                        <h1>SGEO</h1>
                        <p>smart guide for engineering offices</p>
                    </div>
                </header>
                <!--    end  header -->
                <!-- start content -->
                <section class="container" id="About">
                    <div class="row">
                        <div class="img col-lg-6 col-sm-12">
                            <img src="<?php echo e(asset('frontend/images/img/IMG-20231014-WA0028.jpg')); ?>"  class="img-fluid"alt="">

                        </div>

                        <div class="infro col-lg-6 col-sm-12">
                            <h2> About SGEO</h2>
                            <p>The SGEO platform provides speedy communication with engineering service providers,
                                which are companies or engineering offices</p>
                        </div>
                    </div>

                </section>

                <section class="container">
                    <div class="row">
                        <div class="img col-lg-6 col-sm-12">
                            <img src="<?php echo e(asset('frontend/images/img/whyusimg.jpg')); ?>"  class="img-fluid"alt="">

                        </div>
                        <div class="infro col-lg-6 col-sm-12">
                            <h3> Implementing projects with us</h3>
                            <p>No need to worry about the details. Here, you will find what you want in everything you need to clearly define, as the platform provides:
                                Consulting services from the best engineering offices<br>
                                We also provide comparisons between the best engineering offices in terms of prices,
                                offers, evaluation and previous experiences</p>
                            <a href= "<?php echo e(route('login')); ?>"><button class="btn">Implement your project</button></a>
                        </div>

                    </div>

                </section>

                <!-- end content -->

                    <script src="<?php echo e(asset('frontend/Js/external/jquery.slim.min.js')); ?>"></script>
                    <script src="<?php echo e(asset('frontend/Js/external/bootstrap.bundle.js')); ?>"></script>
                </div>



    </body>
</html>
<?php /**PATH C:\xampp\htdocs\bloge_laravel\resources\views/SGEO.blade.php ENDPATH**/ ?>