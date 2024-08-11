<?php if(session('message')): ?>
    <div class="alert alert-<?php echo e(session('alert-type')); ?> alert-dismissible fade show" role="alert" id="alert-message">
        <?php echo e(session('message')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<?php if(session('status')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert-message">
        <?php echo e(session('status')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<?php if(session('resent')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert-message">
        <?php echo e(__('A fresh verification link has been sent to your email address.')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\bloge_laravel\resources\views/partial/flash.blade.php ENDPATH**/ ?>