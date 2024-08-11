<?php $__env->startSection('content'); ?>

    <div class="col-lg-9 col-12">
        <div class="blog-details content">
            <article class="blog-post-details">
                 <?php if($post->media->count() > 0): ?>
                    <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php $__currentLoopData = $post->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li data-target="#carouselIndicators" data-slide-to="<?php echo e($loop->index); ?>" class="<?php echo e($loop->index == 0 ? 'active' : ''); ?>"></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </ol>
                        <div class="carousel-inner">
                            <?php $__currentLoopData = $post->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="carousel-item <?php echo e($loop->index == 0 ? 'active' : ''); ?>">
                                    <img class="d-block w-100" src="<?php echo e(asset('assets/posts/' . $media->file_name)); ?>" alt="<?php echo e($post->title); ?>">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php if($post->media->count() > 1): ?>
                            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <div class="post_wrapper">
                    <div class="post_header">
                        <h2><?php echo e($post->title); ?></h2>
                        <div class="blog-date-categori">
                            <ul>
                                <li><?php echo e($post->created_at->format('M d, Y')); ?></li>
                                <li><a href="#" title="Posts by <?php echo e($post->user->name); ?>" rel="author"><?php echo e($post->user->name); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="post_content">
                        <p><?php echo $post->description; ?></p>

                    </div>
                    <ul class="blog_meta">
                        <?php if($post->approved_comments): ?>
                        <li><a href="#"><?php echo e($post->approved_comments->count()); ?> comment(s)</a></li><?php endif; ?>
                        <li> / </li>
                        <li>Category:<span><?php echo e($post->category->name); ?></span></li>
                    </ul>
                </div>
            </article>
            <?php if($post->approved_comments): ?>
            <div class="comments_area">
                <h3 class="comment__title"><?php echo e($post->approved_comments->count()); ?> comment(s)</h3>
                <ul class="comment__list">
                    <?php $__empty_1 = true; $__currentLoopData = $post->approved_comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li>
                            <div class="wn__comment">
                                <div class="thumb">
                                    <img src="<?php echo e(get_gravatar($comment->email, 46)); ?>" alt="comment images">
                                </div>
                                <div class="content">
                                    <div class="comnt__author d-block d-sm-flex">
                                        <span><a href="<?php echo e($comment->url != '' ? $comment->url : '#'); ?>"><?php echo e($comment->name); ?></a></span>
                                        <span><?php echo e($comment->created_at->format('M d Y h:i a')); ?></span>
                                    </div>
                                    <p><?php echo e($comment->comment); ?></p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p>No comments found.</p>
                    <?php endif; ?>
                </ul>
            </div>


            <div class="comment_respond">
                <h3 class="reply_title">Leave a Reply <small></small></h3>

                <?php echo Form::open(['route' => ['posts.add_comment', $post->slug], 'method' => 'post', 'class' => 'comment__form']); ?>

                <p>Your email address will not be published.Required fields are marked </p>
                <div class="input__box">
                    <?php echo Form::textarea('comment', old('comment'), ['placeholder' => 'Your comment here']); ?>

                    <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="input__wrapper clearfix">
                    <div class="input__box name one--third">
                        <?php echo Form::text('name', old('name'), ['placeholder' => 'Your name here']); ?>

                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="input__box email one--third">
                        <?php echo Form::email('email', old('email'), ['placeholder' => 'Your email here']); ?>

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="input__box website one--third">
                        <?php echo Form::text('url', old('url'), ['placeholder' => 'Your URL here']); ?>

                        <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="submite__btn">
                    <?php echo Form::submit('Post Comment', ['class' => 'btn btn-primary']); ?>

                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
    <?php endif; ?>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloge_laravel\resources\views/frontend/post.blade.php ENDPATH**/ ?>