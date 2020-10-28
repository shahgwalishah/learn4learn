

<?php $__env->startSection('content'); ?>

<style>
    .customSetting
    {
        padding-right: 15px;
        padding-left: 15px;
    }
    .customMargin
    {
        margin: 0px;
    }
</style>

<?php if(session()->has('err_message')): ?>
<div class="row customSetting">
    <div class="alert alert-danger customMargin" style="width: 100%;">
        <?php echo e(session()->get('err_message')); ?>

    </div>
</div>
<?php endif; ?>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Teachers</h4>
                        </div>
                        <div class="col-4 text-right">

                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th>Email</th>
                                    <th>Country</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $userData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($data->fname); ?></td>
                                    <td>
                                        <?php echo e($data->email); ?>

                                    </td>
                                    <td><?php echo e($data->country); ?></td>
                                    <td>
                                        <?php if($data->role == null || $data->role == 0): ?>
                                            <a onclick="myFunction()"
                                            href="<?php echo route('admin.Block',['id'=>$data->id])?>"
                                            class="btn btn-primary "> Active</a>
                                        <?php endif; ?>
                                        <?php if($data->role == 1): ?>
                                            <a onclick="myFunction()"
                                            href="<?php echo route('admin.Active',['id'=>$data->id])?>"
                                            class="btn btn-danger"> Block</a>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a
                                    href="<?php echo e(route('delete.profile',[$data->id])); ?>"
class="btn btn-danger"> Delete</a>
                                    </td>
                                    

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>


            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Student</h4>
                        </div>
                        <div class="col-4 text-right">

                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th>Email</th>
                                    <th>Country</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $studentData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($data->fname); ?></td>
                                    <td>
                                        <?php echo e($data->email); ?>

                                    </td>
                                    <td><?php echo e($data->country); ?></td>
                                    <td>
                                        <?php if($data->role == null || $data->role == 0): ?>
                                            <a onclick="myFunction()"
                                            href="<?php echo route('admin.Block',['id'=>$data->id])?>"
                                            class="btn btn-primary "> Active</a>
                                        <?php endif; ?>
                                        <?php if($data->role == 1): ?>
                                            <a onclick="myFunction()"
                                            href="<?php echo route('admin.Active',['id'=>$data->id])?>"
                                            class="btn btn-danger"> Block</a>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a
                                    href="<?php echo e(route('delete.profile',[$data->id])); ?>"
class="btn btn-danger"> Delete</a>
                                    </td>

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>





        </div>
    </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('black')); ?>/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
    <?php $__env->stopPush(); ?>





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
<?php echo $__env->make('layouts.app', ['pageSlug' => 'dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mustafa/Desktop/rikxtech/learnforlearning/resources/views/Admin/user/userManagement.blade.php ENDPATH**/ ?>