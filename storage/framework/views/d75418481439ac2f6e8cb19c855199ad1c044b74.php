

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title ">Pages</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a class="btn btn-primary" href="<?php echo e(route('pages.create')); ?>">Add New</a>
                            </div>
                        </div>


                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('pages.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Page Title">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="visibility">Visibility</label>
                                    <select name="visibility" class="form-control" id="visibility">
                                        <option value="0">Private</option>
                                        <option value="1">Public</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                
                                <textarea class="form-group" name="page" id="summernote" rows="10"
                                    style="min-width: 100%">
                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Page</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<style>
    .modal-content {
        background-color: black !important;
        color: white;
        opacity: 1;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
    $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 4,
        height: 200
      });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['page' => __('Schedule'), 'pageSlug' => 'Schedule'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/Admin/Pages/create.blade.php ENDPATH**/ ?>