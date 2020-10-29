<?php $__env->startSection('content'); ?>

<style>
    .customYellow{
            background-image: linear-gradient(to bottom left, #ffc10e, #ffc10e, #ffc10e) !important;
    } 
    #custom {
       color: black !important;
    }
    .table>thead>tr>th {
        border-bottom-width: 1px;
        font-size: 12px;
        text-transform: uppercase;
        font-weight: 700;
        border: 0;
        color: rgb(16 16 16 / 84%);
    }
    .customSetting{
        background-color: white;
    }
    .table>tbody>tr>td, .table>tfoot>tr>td {
        border-color: rgb(255 206 0);
        padding: 12px 7px;
        vertical-align: middle;
    }
    .table>tbody>tr>td {
        color: rgb(0 0 0 / 95%) !important;
    }
    .customWhite{
        background-color: white;
    }
    .card .card-header:not([data-background-color]) {
         background-color: #fffffff5;
    }
    .card .card-header .card-title {
        color: black;
        font-weight: 100;
}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="col-md-12 customWhite">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title "><b>Subjects</b></h4>
                            </div>
                            <div class="col-6 text-right">
                            <a class="btn btn-primary customYellow" href="<?php echo e(route('subjects.create')); ?>">Add New</a>
                            </div>
                        </div>
                    </div>
                    <?php if(session()->has('message')): ?>
                        <div class="row">
                            <div class="alert alert-success" style="width: 100%;">
                                <?php echo e(session()->get('message')); ?>

                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(session()->has('err_message')): ?>
                        <div class="row">
                            <div class="alert alert-danger" style="width: 100%;">
                                <?php echo e(session()->get('err_message')); ?>

                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="card-body customSetting">
                        <div class="table-responsive">

                            <table class="table">
                                <thead class=" text-primary">
                                    <th>No.</th>
                                    <th>Subject Name</th>
                                    <th>Action</th>

                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td><?php echo e($sub->id); ?></td>
                                    <td><?php echo e($sub->name); ?></td>
                                        <td>
                                        <a data-toggle="modal" data-target="#myModal-<?php echo e($sub->id); ?>"
                                                class="btn btn-sm fa fa-edit customYellow"></a>
                                        <a href="<?php echo e(route('subjects.delete',[$sub->id])); ?>"
                                                class="btn btn-sm fa fa-trash customYellow"></a>
                                        </td>
                                    </tr>


                                     <!-- Modal -->
                                     <div class="modal fade" id="myModal-<?php echo e($sub->id); ?>" role="dialog">
                                        <div class="modal-dialog">
                                        
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Edit Details</h4>
                                            </div>
                                                <form action="<?php echo e(route('subjects.update' ,[$sub->id])); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="modal-body">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for=name>Subject Name</label>
                                                            <input type="text" value="<?php echo e($sub->name); ?>" style="color: #555;" class="form-control" name="name" id="name"
                                                            required="name">
                                                        </div>
                                                    </div>
                                                    </div>
                                                        <div class="modal-footer">
                                                        <button type="submit" class="btn btn-default customYellow">Update</button>
                                                        </div>
                                                </form>   
                                          </div>
                                        </div>
                                      </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['page' => __('Schedule'), 'pageSlug' => 'Schedule'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/Admin/subjects/index.blade.php ENDPATH**/ ?>