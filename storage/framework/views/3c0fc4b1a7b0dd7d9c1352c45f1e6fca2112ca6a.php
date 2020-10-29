

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Schedule Posters</h5>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Simple Table</h4>
                        <p class="card-category"> Here is a subtitle for this table</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>

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
                                                <div class="card-footer">
                                                    <button type="submit"
                                                        class="btn btn-primary"><?php echo e(__('save')); ?></button>
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