

<?php $__env->startSection('content'); ?>
    <div class="col-lg-5 col-md-7 ml-auto mr-auto">
        <form class="form" method="post" action="<?php echo e(route('password.email')); ?>">
            <?php echo csrf_field(); ?>

            <div class="card card-login card-white" style="    border: 1px solid #ffc10e !important;">
                <div class="card-header" style="background:#ffc10e;">
                    <h1 class="card-title"><?php echo e(__('Reset password')); ?></h1>
                </div>
                <div class="card-body" style="align-items: center;
                display: flex;    flex-direction: column; justify-content:center;">
                    <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="form-group" style="width: 100%;">
                        <label>Email Address:</label>
                        <div class="input-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                            <input type="email" name="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Email')); ?>">
                            <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" style="background-color: #045375" class="btn btn-primary btn-lg btn-block mb-3"><?php echo e(__('Send Password Reset Link')); ?></button>
                </div>
            </div>
        </form>
    </div>
    <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', ['class' => 'login-page', 'page' => __('Reset password'), 'contentClass' => 'login-page'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>