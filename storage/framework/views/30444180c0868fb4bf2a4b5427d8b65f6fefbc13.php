

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-8">


            <div class="card">
                <div class="card-header">
                    <h5 class="title"><?php echo e(__('Password')); ?></h5>
                </div>

                                      <?php if(session()->has('message.level')): ?>

                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php echo session('message.content'); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
             <?php endif; ?>

             
                <form method="post" action="<?php echo e(route('profile.passwordss')); ?>" >
                    <div class="card-body">
                        <?php echo csrf_field(); ?>
                       

                      

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                            <label><?php echo e(__('New Password')); ?></label>
                            <input type="password" name="password" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="con_password" class="form-control" value="" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit"   onclick="myFunction()"  class="btn btn-fill btn-primary"><?php echo e(__('Change password')); ?></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">

<img  style="height: 70px; border-radius: 50px" src="<?php echo e(url('/storage/images/'.$edit[0]->thumbnail)); ?>" alt="Bologna">


                                <h5 class="title"><?php echo e($edit[0]->fname); ?></h5>
                            </a>
                            <p class="description">
                            </p>
                        </div>
                    </p>
              
                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <button class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<script>
function myFunction() {
  var txt;
  var r = confirm("Are You Sure Are You Want to Edit");
  if (r == true) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>
<?php echo $__env->make('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/profile/edit.blade.php ENDPATH**/ ?>