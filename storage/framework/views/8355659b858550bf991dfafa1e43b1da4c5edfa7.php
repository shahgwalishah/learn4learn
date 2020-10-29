
<?php $__env->startSection('content'); ?>

<style>
    #customSet{
        color: black;
    }
    .customYellow{
            background-image: linear-gradient(to bottom left, #ffc10e, #ffc10e, #ffc10e) !important;
    } 
    .customSetting{
        background-color: white;
    }
    .table>tbody>tr>td, .table>tfoot>tr>td {
        border-color: rgb(255 184 6);
        padding: 12px 7px;
        vertical-align: middle;
    }
    .table>tbody>tr>td {
        color: rgb(0 0 0) !important;
    }
    .customSet{
        background-color: white;
    }
    .card .card-header:not([data-background-color]) {
    background-color: #fffffffc;
    }
    .card .card-header .card-title {
    color: black;
    font-weight: 100;
    }
    
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="col-md-12 customSet">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title "><b>Pages</b></h4>
                            </div>
                            <div class="col-6 text-right">
                                <a class="btn btn-primary customYellow" href="<?php echo e(route('pages.create')); ?>">Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body customSetting">
                        <div class="table-responsive">

                            <table class="table">
                                <thead class=" text-primary">
                                    <th id="customSet">No.</th>
                                    <th id="customSet">Title</th>
                                    <th id="customSet">Content</th>
                                    <th id="customSet">visibility</th>
                                    <th id="customSet">Action</th>

                                </thead>
                                <tbody>
                                    <?php if($pages): ?>
                                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$key); ?></td>
                                        <td width="20%"><?php echo e($page->title); ?></td>
                                        <td width="50%"><?php echo e(Str::limit($page->page, 150, '...')); ?></td>

                                        <td><?php echo e($page->visibility ? 'Public' : 'Private'); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('pages.edit', $page->id)); ?>"
                                                class="btn btn-sm fa fa-edit customYellow"></a>
                                            <a href="<?php echo e(route('pages.destroy', $page->id)); ?>"
                                                class="btn btn-sm fa fa-trash customYellow"></a>
                                            <a href="<?php echo e(route('pages.show', $page->slug)); ?>"
                                                class="btn btn-sm fa fa-eye customYellow"></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>

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
<?php echo $__env->make('layouts.app', ['page' => __('Schedule'), 'pageSlug' => 'Schedule'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/Admin/Pages/pages.blade.php ENDPATH**/ ?>