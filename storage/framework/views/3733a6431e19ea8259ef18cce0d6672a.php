<?php $__env->startSection('content'); ?>
    <div class="page-blog-details section-padding--lg bg--white">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="blog-details content">
                        <article class="blog-post-details">
                            <?php if($page->media->count()>0): ?>
                                <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <?php $__currentLoopData = $page->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li data-target="#carouselIndicators" data-slide-to="<?php echo e($loop->index); ?>" class=<?php echo e($loop->index==0?"active":""); ?>></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ol>
                                    <div class="carousel-inner">
                                        <?php $__currentLoopData = $page->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class=<?php echo e($loop->index==0?"active":""); ?>>
                                                <img class="d-block w-100" src="<?php echo e(asset('assets.post'.$media->file_name)); ?>" alt="<?php echo e($page->titel); ?>">
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                    <?php if($page->media->count()>1): ?>
                                    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php endif; ?>


                            <div class="post_wrapper">
                                <div class="post_header">
                                    <h2><?php echo e($page->titel); ?></h2>
                                    <div class="blog-date-categori">
                                        <ul>
                                            <li><?php echo e($page->created_at->format('M d,Y')); ?></li>
                                            <li><a href="#" title="Posts by <?php echo e($page->user->name); ?>" rel="author"><?php echo e($page->user->name); ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post_content">
                                    <p> <?php echo $page->description; ?></p>
                                </div>

                            </div>
                        </article>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloge_laravel\resources\views/frontend/page.blade.php ENDPATH**/ ?>