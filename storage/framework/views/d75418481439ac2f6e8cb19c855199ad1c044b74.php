

<?php $__env->startSection('content'); ?>

<style>

    .customYellow{
                background-image: linear-gradient(to bottom left, #ffc10e, #ffc10e, #ffc10e) !important;
        } 
    #cutomHello{
        color: black
    }
    .customSetting{
        background-color: white;
    }
    .form-control {
        border-color: #fffd00;
        border-radius: 0.4285rem;
        font-size: 0.75rem;
        color: rgb(0 0 0) !important;
    }
    .customSet{
        background-color: white;
    }
    .card .card-header .card-title {
            color: black;
            font-weight: 100;
    }
    #customChange{
        background-color: white;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="col-md-12 customSet">
                <div class="card">
                    <div class="card-header card-header-primary" id="customChange">
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
                        <form action="<?php echo e(route('pages.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="title" id="cutomHello">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Page Title">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="visibility" id="cutomHello">Visibility</label>
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
                            <button type="submit" class="btn btn-primary customYellow">Create Page</button>
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