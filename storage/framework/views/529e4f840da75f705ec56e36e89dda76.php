
<!-- Header -->
<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-7 col-lg-2">
                <div class="logo">
                    <a href="<?php echo e(route('index')); ?>">
                        <img src="<?php echo e(asset('frontend/images/logo/logo1.png')); ?>" alt="logo images">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <nav class="mainmenu__nav">
                    <ul class="meninmenu d-flex justify-content-start">
                        <li class="drop with--one--item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
                        <li class="drop with--one--item"><a href="<?php echo e(route('frontend.page','about-us')); ?>">About us</a></li>
                        <li class="drop with--one--item"><a href="<?php echo e(route('frontend.page','our-visionpage')); ?>">our-visionpage</a></li>
                        <li class="drop"><a href="#">Blog</a>
                            <div class="megamenu dropdown">
                                <ul class="item item01">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <li><a href="<?php echo e(route('frontend.category',$category->id)); ?>"><?php echo e($category->name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </div>
                        </li>
                        <li><a href="<?php echo e(route('frontend.contact')); ?>">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-8 col-sm-8 col-5 col-lg-2">
                <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                    <li class="shop_search"><a class="search__active" href="#"></a></li>
                    <li class="wishlist"><a href="#"></a></li>
                    <li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">3</span></a>
                        <!-- Start Shopping Cart -->
                        <div class="block-minicart minicart__active">
                            <div class="minicart-content-wrapper">
                                <div class="micart__close">
                                    <span>close</span>
                                </div>
                                <div class="items-total d-flex justify-content-between">
                                    <span>3 items</span>
                                    <span>Cart Subtotal</span>
                                </div>
                                <div class="total_amount text-right">
                                    <span>$66.00</span>
                                </div>
                                <div class="mini_action checkout">
                                    <a class="checkout__btn" href="cart.html">Go to Checkout</a>
                                </div>
                                <div class="single__items">
                                    <div class="miniproduct">
                                        <div class="item01 d-flex">
                                            <div class="thumb">
                                                <a href="product-details.html"><img src="<?php echo e(asset('images/blog/sm-img/1.jpg')); ?>" alt="product images"></a>
                                            </div>
                                            <div class="content">
                                                <h6><a href="product-details.html">Voyage Yoga Bag</a></h6>
                                                <span class="prize">$30.00</span>
                                                <div class="product_prize d-flex justify-content-between">
                                                    <span class="qun">Qty: 01</span>
                                                    <ul class="d-flex justify-content-end">
                                                        <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                                                        <li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item01 d-flex mt--20">
                                            <div class="thumb">
                                                <a href="product-details.html"><img src="<?php echo e(asset('images/blog/sm-img/1.jpg')); ?>" alt="product images"></a>
                                            </div>
                                            <div class="content">
                                                <h6><a href="product-details.html">Impulse Duffle</a></h6>
                                                <span class="prize">$40.00</span>
                                                <div class="product_prize d-flex justify-content-between">
                                                    <span class="qun">Qty: 03</span>
                                                    <ul class="d-flex justify-content-end">
                                                        <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                                                        <li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item01 d-flex mt--20">
                                            <div class="thumb">
                                                <a href="product-details.html"><img src="<?php echo e(asset('images/blog/sm-img/1.jpg')); ?>" alt="product images"></a>
                                            </div>
                                            <div class="content">
                                                <h6><a href="product-details.html">Compete Track Tote</a></h6>
                                                <span class="prize">$40.00</span>
                                                <div class="product_prize d-flex justify-content-between">
                                                    <span class="qun">Qty: 03</span>
                                                    <ul class="d-flex justify-content-end">
                                                        <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                                                        <li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mini_action cart">
                                    <a class="cart__btn" href="cart.html">View and edit cart</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Shopping Cart -->
                    </li>
                    <li class="setting__bar__icon"><a class="setting__active" href="<?php echo e(route('login')); ?>"></a>
                        <div class="searchbar__content setting__block">
                            <div class="content-inner">
                                <div class="switcher-currency">
                                    <strong class="label switcher-label">
                                        <span>Currency</span>
                                    </strong>
                                    <div class="switcher-options">
                                        <div class="switcher-currency-trigger">
                                            <span class="currency-trigger">USD - US Dollar</span>
                                            <ul class="switcher-dropdown">
                                                <li>GBP - British Pound Sterling</li>
                                                <li>EUR - Euro</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="switcher-currency">
                                    <strong class="label switcher-label">
                                        <span>Language</span>
                                    </strong>
                                    <div class="switcher-options">
                                        <div class="switcher-currency-trigger">
                                            <span class="currency-trigger">English01</span>
                                            <ul class="switcher-dropdown">
                                                <li>English02</li>
                                                <li>English03</li>
                                                <li>English04</li>
                                                <li>English05</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="switcher-currency">
                                    <strong class="label switcher-label">
                                        <span>Select Store</span>
                                    </strong>
                                    <div class="switcher-options">
                                        <div class="switcher-currency-trigger">
                                            <span class="currency-trigger">Fashion Store</span>
                                            <ul class="switcher-dropdown">
                                                <li>Furniture</li>
                                                <li>Shoes</li>
                                                <li>Speaker Store</li>
                                                <li>Furniture</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="switcher-currency">
                                    <strong class="label switcher-label">
                                        <span>My Account</span>
                                    </strong>
                                    <div class="switcher-options">
                                        <div class="switcher-currency-trigger">
                                            <div class="setting__menu">
                                                <span><a href="#">Compare Product</a></span>
                                                <span><a href="#">My Account</a></span>
                                                <span><a href="#">My Wishlist</a></span>
                                                <span><a href="#">Sign In</a></span>
                                                <span><a href="#">Create An Account</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Start Mobile Menu -->
        <div class="row d-none">
            <div class="col-lg-12 d-none">
                <nav class="mobilemenu__nav">
                    <ul class="meninmenu">
                        <li class="drop with--one--item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
                        <li class="drop with--one--item"><a href="<?php echo e(route('frontend.page','about-us')); ?>">About us</a></li>
                        <li class="drop with--one--item"><a href="<?php echo e(route('frontend.page','our-visionpage')); ?>">our-visionpage</a></li>

                        <li><a href="#">Blog</a>

                            <ul class="item item01">
                                <li><a href="#">un-categories</a></li>
                                <li><a href="#">flower</a></li>
                                <li><a href="#">kitching</a></li>
                                <li><a href="#">natural</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo e(route('frontend.contact')); ?>">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Mobile Menu -->
        <div class="mobile-menu d-block d-lg-none">
        </div>
        <!-- Mobile Menu -->
    </div>
</header>
<!-- //Header -->
<!-- Start Search Popup -->
<div class="box-search-content search_active block-bg close__top">
    <form id="search_mini_form" class="minisearch" action="#">
        <div class="field__search">
            <input type="text" placeholder="Search entire store here...">
            <div class="action">
                <a href="#"><i class="zmdi zmdi-search"></i></a>
            </div>
        </div>
    </form>
    <div class="close__wrap">
        <span>close</span>
    </div>
</div>
<!-- End Search Popup -->
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--4">
</div>






















































<?php /**PATH C:\xampp\htdocs\bloge_laravel\resources\views/partial/frontend/header.blade.php ENDPATH**/ ?>