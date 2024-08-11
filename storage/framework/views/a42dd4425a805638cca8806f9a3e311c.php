<?php $__env->startSection('content'); ?>
    <div class="page-blog bg--white section-padding--lg blog-sidebar right-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="blog-page">

                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <article class="blog__post d-flex flex-wrap">
                            <div class="thumb">
                               
                                <a href="<?php echo e(route('post_show',$post->id)); ?>">
                                    
                                        <?php if($post->category_id): ?>

                                        <img src="<?php echo e(asset('assets/posts/')."/".$post->category_id.".jpg"); ?>" alt="blog images">
                                        <?php else: ?>
                                        <img src="<?php echo e(asset('assets/posts/2.jpg')); ?>" alt="blog images">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="content">
                                <h4><a href="<?php echo e($post->titel); ?>">Blog image post</a></h4>
                                <ul class="post__meta">
                                    <li>Posts by : <a href="#"> <?php echo e($post->user->name); ?></a></li>
                                    <li class="post_separator">/</li>
                                    <li><?php echo e($post->created_at->format('M d Y')); ?></li>
                                </ul>
                                <p><?php echo \Illuminate\Support\Str::limit($post->description,145,'...'); ?></p>
                                <div class="blog__btn">
                                    <a href="<?php echo e(route('post_show',$post->id)); ?>">read more</a>
                                </div>
                            </div>
                        </article>
                        <!-- End Single Post -->
                        <!-- Start Single Post -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="text-center"> No post found</div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <ul class="wn__pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                   </ul>
                </div>
                <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
                    <div class="wn__sidebar">
                        <!-- Start Single Widget -->
                        <aside class="widget search_widget">
                            <h3 class="widget-title">Search</h3>
                            <form action="#">
                                <div class="form-input">
                                    <input type="text" placeholder="Search...">
                                    <button><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </aside>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <aside class="widget recent_widget">
                            <h3 class="widget-title">Recent</h3>
                            <div class="recent-posts">
                                <ul>
                                    <li>
                                        <div class="post-wrapper d-flex">
                                            <div class="thumb">
                                                <a href="blog-details.html"><img src="<?php echo e(asset('frontend/images/blog/sm-img/1.jpg')); ?>" alt="blog images"></a>
                                            </div>
                                            <div class="content">
                                                <h4><a href="blog-details.html">Blog image post</a></h4>
                                                <p>	March 10, 2015</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-wrapper d-flex">
                                            <div class="thumb">
                                                <a href="blog-details.html"><img src="<?php echo e(asset('frontend/images/blog/sm-img/2.jpg')); ?>" alt="blog images"></a>
                                            </div>
                                            <div class="content">
                                                <h4><a href="blog-details.html">Post with Gallery</a></h4>
                                                <p>	March 10, 2015</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-wrapper d-flex">
                                            <div class="thumb">
                                                <a href="blog-details.html"><img src="<?php echo e(asset('frontend/images/blog/sm-img/3.jpg')); ?>" alt="blog images"></a>
                                            </div>
                                            <div class="content">
                                                <h4><a href="blog-details.html">Post with Video</a></h4>
                                                <p>	March 10, 2015</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-wrapper d-flex">
                                            <div class="thumb">
                                                <a href="blog-details.html"><img src="<?php echo e(asset('frontend/images/blog/sm-img/4.jpg')); ?>" alt="blog images"></a>
                                            </div>
                                            <div class="content">
                                                <h4><a href="blog-details.html">Maecenas ultricies</a></h4>
                                                <p>	March 10, 2015</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-wrapper d-flex">
                                            <div class="thumb">
                                                <a href="blog-details.html"><img src="<?php echo e(asset('frontend/images/blog/sm-img/5.jpg')); ?>" alt="blog images"></a>
                                            </div>
                                            <div class="content">
                                                <h4><a href="blog-details.html">Blog image post</a></h4>
                                                <p>	March 10, 2015</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <aside class="widget comment_widget">
                            <h3 class="widget-title">Comments</h3>
                            <ul>
                                <li>
                                    <div class="post-wrapper">
                                        <div class="thumb">
                                            <img src="<?php echo e(asset('frontend/images/blog/comment/1.jpeg')); ?>" alt="Comment images">
                                        </div>
                                        <div class="content">
                                            <p>demo says:</p>
                                            <a href="#">Quisque semper nunc vitae...</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-wrapper">
                                        <div class="thumb">
                                            <img src="<?php echo e(asset('frontend/images/blog/comment/1.jpeg')); ?>" alt="Comment images">
                                        </div>
                                        <div class="content">
                                            <p>Admin says:</p>
                                            <a href="#">Curabitur aliquet pulvinar...</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-wrapper">
                                        <div class="thumb">
                                            <img src="<?php echo e(asset('frontend/images/blog/comment/1.jpeg')); ?>" alt="Comment images">
                                        </div>
                                        <div class="content">
                                            <p>Irin says:</p>
                                            <a href="#">Quisque semper nunc vitae...</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-wrapper">
                                        <div class="thumb">
                                            <img src="<?php echo e(asset('frontend/images/blog/comment/1.jpeg')); ?>" alt="Comment images">
                                        </div>
                                        <div class="content">
                                            <p>Boighor says:</p>
                                            <a href="#">Quisque semper nunc vitae...</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-wrapper">
                                        <div class="thumb">
                                            <img src="<?php echo e(asset('frontend/images/blog/comment/1.jpeg')); ?>" alt="Comment images">
                                        </div>
                                        <div class="content">
                                            <p>demo says:</p>
                                            <a href="#">Quisque semper nunc vitae...</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </aside>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <aside class="widget category_widget">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Electronics</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Flower</a></li>
                                <li><a href="#">Books</a></li>
                                <li><a href="#">Jewelle</a></li>
                            </ul>
                        </aside>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <aside class="widget archives_widget">
                            <h3 class="widget-title">Archives</h3>
                            <ul>
                                <li><a href="#">March 2015</a></li>
                                <li><a href="#">December 2014</a></li>
                                <li><a href="#">November 2014</a></li>
                                <li><a href="#">September 2014</a></li>
                                <li><a href="#">August 2014</a></li>
                            </ul>
                        </aside>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloge_laravel\resources\views/frontend/index.blade.php ENDPATH**/ ?>