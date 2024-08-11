<?php $__env->startSection('content'); ?>
    <section class="my_account_area pt--80 pb--55 bg--white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-md-3">
                    <div class="my__account__wrapper">
                        <h3 class="account__title">Login</h3>
                        <?php echo Form::open(['route' => 'login', 'method' => 'post']); ?>


                        <div class="account__form">
                            <div class="input__box">
                                <?php echo Form::label('username', 'Username *'); ?>

                                <?php echo Form::text('username', old('username')); ?>

                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="input__box">
                                <?php echo Form::label('password', 'Password *'); ?>

                                <?php echo Form::password('password'); ?>

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form__btn">
                                <?php echo Form::button('Login', ['type' => 'submit']); ?>

                                <label class="label-for-checkbox">
                                    <input class="input-checkbox" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <a class="forget_pass" href="<?php echo e(route('password.request')); ?>">Lost your password?</a>
                            <p>Don't have an account? <a href="<?php echo e(route('show_Registration_Form')); ?>">Create an Account</a></p>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloge_laravel\resources\views/frontend/auth/login.blade.php ENDPATH**/ ?>