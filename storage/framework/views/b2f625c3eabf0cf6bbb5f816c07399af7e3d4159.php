

<?php $__env->startSection('content'); ?>
<div class="col-lg-5 col-md-7 ml-auto mr-auto">
    <form class="form" method="post" action="<?php echo e(route('password.update')); ?>">
        <?php echo csrf_field(); ?>

        <div class="card card-login card-white" style="  height:auto;  border: 1px solid #ffc10e !important;">
            <div class="card-header" style="background:#ffc10e;">
                <h1 class="card-title"><?php echo e(__('Reset password')); ?></h1>
            </div>
            <div class="card-body">
                <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <input type="hidden" name="token" value="<?php echo e($token); ?>">

                <div class="form-group" style="width: 100%;">
                    <label>Email Address</label>
                    <div class="input-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                        <input type="email" value="<?php echo e($email); ?>" name="email"
                            class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                            placeholder="<?php echo e(__('Email')); ?>">
                        <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <div class="form-group" style="width: 100%;">
                    <label>Password</label>
                    <div class="input-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                        <input type="password" name="password"
                            class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                            placeholder="<?php echo e(__('Password')); ?>">
                        <?php echo $__env->make('alerts.feedback', ['field' => 'password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <div class="form-group" style="width: 100%;">
                    <label>Confirm Password</label>
                    <div class="input-group">
                        <input type="password" name="password_confirmation" class="form-control"
                            placeholder="<?php echo e(__('Confirm Password')); ?>">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" style="background-color: #045375" class="btn btn-primary btn-lg btn-block mb-3"><?php echo e(__('Reset Password')); ?></button>
            </div>
        </div>
    </form>
</div>
<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', ['class' => 'login-page', 'page' => __('Reset password'), 'contentClass' => 'login-page'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/auth/passwords/reset.blade.php ENDPATH**/ ?>