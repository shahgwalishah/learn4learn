

<?php $__env->startSection('content'); ?>

<style>
    .customSetting
    {
        padding-right: 15px !important;
        padding-left: 15px !important;
    }
    .customMargin
    {
        margin: 0px !important;
    }
    .customColoring{
        background-color: #ffc10e!important;
    }
    #repl2{
        color: black !important;
    }
    .customYellow{
        background-image: linear-gradient(to bottom left, #ffc10e, #ffc10e, #ffc10e) !important;
    }
    .customWhite{
        background-color: #fff !important;
    }
    .table>tbody>tr>td {
    color: rgb(39 38 38 / 70%) !important;
    }
    .customBackground{
        background-color: white !important;
    }
    .table>tbody>tr>td, .table>tfoot>tr>td {
    border-color: rgb(218 172 24 / 87%);
    padding: 12px 7px;
    vertical-align: middle;
}
.customBlack{
    color: black !important;
}
</style>

<?php if(session()->has('err_message')): ?>
<div class="row customSetting">
    <div class="alert alert-danger customMargin" style="width: 100%;">
        <?php echo e(session()->get('err_message')); ?>

    </div>
</div>
<?php endif; ?>
<div class="content customBackground">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header customColoring">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title" id="repl2"><b>Users Management</b></h4>
                        </div>
                        <form class="form-inline d-flex justify-content-center md-form form-sm mt-0">
                            <i class="fas fa-search" aria-hidden="true"></i>
                            <input class="form-control form-control-sm ml-3 w-75 customBlack" type="text" placeholder="Search"
                              aria-label="Search">
                          </form>
                        <div class="col-4 text-right">
                        </div>
                    </div>
                </div>
                <div class="card-body customWhite">

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th scope="col" id="repl2">Name</th>
                                    <th id="repl2">Email</th>
                                    <th id="repl2">Country</th>
                                    <th id="repl2">Status</th>
                                    <th id="repl2">Action</th>
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
                                            class="btn btn-primary customYellow"> Active</a>
                                        <?php endif; ?>
                                        <?php if($data->role == 1): ?>
                                            <a onclick="myFunction()"
                                            href="<?php echo route('admin.Active',['id'=>$data->id])?>"
                                            class="btn btn-danger customYellow"> Block</a>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a
                                    href="<?php echo e(route('delete.profile',[$data->id])); ?>"
class="btn btn-danger customYellow"> Delete</a>
                                    </td>  

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="card ">
                <div class="card-header customColoring">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title" id="repl2"><b>Student</b></h4>
                        </div>
                        <form class="form-inline d-flex justify-content-center md-form form-sm mt-0">
                            <i class="fas fa-search" aria-hidden="true"></i>
                            <input class="form-control form-control-sm ml-3 w-75 customBlack" type="text" placeholder="Search"
                              aria-label="Search">
                          </form>
                        <div class="col-4 text-right">

                        </div>
                    </div>
                </div>
                <div class="card-body customWhite">

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th scope="col" id="repl2">Name</th>
                                    <th id="repl2">Email</th>
                                    <th id="repl2">Country</th>
                                    <th id="repl2">Status</th>
                                    <th id="repl2">Action</th>
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
                                            class="btn btn-primary customYellow"> Active</a>
                                        <?php endif; ?>
                                        <?php if($data->role == 1): ?>
                                            <a onclick="myFunction()"
                                            href="<?php echo route('admin.Active',['id'=>$data->id])?>"
                                            class="btn btn-danger customYellow"> Block</a>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a
                                    href="<?php echo e(route('delete.profile',[$data->id])); ?>"
class="btn btn-danger customYellow"> Delete</a>
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
<?php echo $__env->make('layouts.app', ['pageSlug' => 'dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/Admin/user/userManagement.blade.php ENDPATH**/ ?>