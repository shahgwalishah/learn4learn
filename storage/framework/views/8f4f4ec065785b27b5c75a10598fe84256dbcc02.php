<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title ">Subjects</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <form action="<?php echo e(route('subjects.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for=name>Subject Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Page Title" required="subject_name">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Subject</button>
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
<?php echo $__env->make('layouts.app', ['page' => __('Schedule'), 'pageSlug' => 'Schedule'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/Admin/subjects/create.blade.php ENDPATH**/ ?>