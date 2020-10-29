

<?php $__env->startSection('content'); ?>
<style>
    #customAction{
        color: black !important;
    }
    .customColoring{
        background-color: white !important;
    }
    .text-light {
    color: #242627 !important;
    }
    .customYellow{
        background-image: linear-gradient(to bottom left, #ffc10e, #ffc10e, #ffc10e) !important;
    }
    .customWhite{
        background-color: white;
        padding-left: 1px;
        padding-right: 1px;
    }
    .card .card-header:not([data-background-color]) {
    background-color: #f3be01;
   }
   .card .card-header .card-title {
    color: black;
    font-weight: 100;
   }
   card .card-header .card-category {
    color: black;
    margin-bottom: 5px;
    font-weight: 300;
   }
   .card h5, .card h6, .card p {
    color: black;
   }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Schedule Posters</h5>
            </div>

            <div class="col-md-12 customWhite">
                <div class="card">
                    <div class="card-body customColoring">
                        <div class="table-responsive">

                            <table class="table">
                                <thead class=" text-primary">
                                    <th id="customAction">ID</th>
                                    <th id="customAction">Title</th>
                                    <th id="customAction">Description</th>
                                    <th id="customAction">Action</th>

                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <form action="<?php echo e(route('editPoster',[$datum->id])); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <tr>
                                            <td><?php echo e($datum->id); ?></td>
                                            <td><input type="text" name="title" class="text-light"
                                                    value="<?php echo e($datum->title); ?>"
                                                    style="background-color:transparent; border: none"></td>
                                            <td><textarea name="discription" id="" cols="50" rows="10"
                                                    class="w-100 text-light"
                                                    style="background-color:transparent !important; border: none"><?php echo e($datum->discription); ?></textarea>
                                            </td>
                                            <td>
                                                <div class="card-footer ">
                                                    <button type="submit"
                                                        class="btn btn-primary customYellow"><?php echo e(__('save')); ?></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
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
<?php echo $__env->make('layouts.app', ['page' => __('Schedule'), 'pageSlug' => 'Schedule'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/pages/schedule-poster.blade.php ENDPATH**/ ?>