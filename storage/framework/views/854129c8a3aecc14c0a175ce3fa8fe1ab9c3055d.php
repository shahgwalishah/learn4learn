

<?php $__env->startSection('content'); ?>
<style>
    .customYellow{
            background-image: linear-gradient(to bottom left, #ffc10e, #ffc10e, #ffc10e) !important;
    } 
    .card label {
           color: rgb(31 28 28 / 69%);
    }
    .customSetting{
        background-color: white;
    }
    #title{
        color: black;
    }
    #visibility{
        color: black;
    }
    .customWhite{
        background-color: white;
    }
    #customId{
        background-color: #ffc10e;
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
                    <div class="card-header card-header-primary" id="customId">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title "><?php echo e($page->title); ?></h4>
                            </div>
                        </div>


                    </div>
                    <div class="card-body customSetting">
                        <form action="<?php echo e(route('pages.update', $page->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" value="<?php echo e($page->title); ?>" name="title"
                                        id="title" placeholder="Page Title">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="visibility" id="customvisibility">Visibility</label>
                                    <select name="visibility" class="form-control" id="visibility">
                                        <option value="0" <?php echo e($page->visibility ? 'selected' : ''); ?>>Private</option>
                                        <option value="1" <?php echo e($page->visibility ? 'selected' : ''); ?>>Public</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                
                                <textarea class="form-group" name="description" id="summernote" rows="10"
                                    style="min-width: 100%">
                                    <?php echo $page->page; ?>

                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary customYellow">Save Page</button>
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
<?php echo $__env->make('layouts.app', ['page' => __('Schedule'), 'pageSlug' => 'Schedule'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/Admin/Pages/edit.blade.php ENDPATH**/ ?>