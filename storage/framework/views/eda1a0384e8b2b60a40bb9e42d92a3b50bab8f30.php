

<?php $__env->startSection('content'); ?>

<style>
    .customColor{
        background-color: white;
    }
    .text-light {
    color: #2d2e2f !important;
    }
    .table>tbody>tr>td, .table>tfoot>tr>td {
    border-color: rgb(241 194 2 / 97%);
    padding: 12px 7px;
    vertical-align: middle;
    }
    .customYellow{
        background-image: linear-gradient(to bottom left, #ffc10e, #ffc10e, #ffc10e) !important;
    }
    .card .card-header:not([data-background-color]) {
    background-color: #ffc803f0;
    }
    .card .card-header .card-title {
    color: black;
    font-weight: 100;
    }
    .card .card-header .card-category {
    color: black;
    margin-bottom: 5px;
    font-weight: 300;
    }
    .card h5, .card h6, .card p {
    color: rgb(0 0 0 / 80%);
}
    .customColor{
        background-color: white;
    }

</style>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">For Teachers Posters</h5>
                </div>

                <div class="col-md-12 customColor">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Edit</h4>
                            <p class="card-category"> click on text after changings save this</p>
                        </div>
                        <div class="card-body customColor">
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
                                        <form action="<?php echo e(route('editforTeacher',[$datum->id])); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <tr>
                                                <td><?php echo e($datum->id); ?></td>
                                                <td><input type="text" name="title" class="text-light" value="<?php echo e($datum->title); ?>" style="background-color:transparent; border: none"></td>
                                                <td><textarea name="discription" id="" cols="50" rows="10" class="w-100 text-light" style="background-color:transparent !important; border: none"><?php echo e($datum->discription); ?></textarea> </td>
                                                <td>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary customYellow"><?php echo e(__('save')); ?></button>
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

<?php echo $__env->make('layouts.app', ['page' => __('forteacher'), 'pageSlug' => 'forteacher'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/pages/for-teachers.blade.php ENDPATH**/ ?>