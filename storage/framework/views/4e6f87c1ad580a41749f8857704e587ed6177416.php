

<?php $__env->startSection('content'); ?>

<style>
    .customYellow{
            background-image: linear-gradient(to bottom left, #ffc10e, #ffc10e, #ffc10e) !important;
        } 
        #customSet{
            color: black;
        }
        .customSetting{
            background-color: white;
        }
        .text-white {
            color: #080808 !important;
        }
        .card .card-header:not([data-background-color]) {
           background-color: #ffd300f7;
        }
        .card .card-header .card-title {
            color: black;
            font-weight: 100;
        }
</style>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title"><b>Email Configuration</b></h4>
                        </div>
                    </div>
                </div>
                <div class="card-body customSetting">
                    <form method="POST" action="<?php echo e(route('email-config.update', $email->id)); ?>" name="addEmailForm">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="smtp-host" class="col-form-label" id="customSet">SMTP Host:</label>
                                    <input type="text" required name="smtpHost" class="form-control text-white"
                                        id="smtp-host" value="<?php echo e($email->host); ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="smtp-username" class="col-form-label" id="customSet">SMTP Username:</label>
                                    <input type="text" required class="form-control text-white" name="smtpUsername"
                                        value="<?php echo e($email->username); ?>" id="smtp-username">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="smtp-password" class="col-form-label" id="customSet">SMTP Password:</label>
                                    <input type="text" required name="smtpPassword" class="form-control text-white"
                                        id="smtp-password" value="<?php echo e($email->password); ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="smtp-port" class="col-form-label" id="customSet">SMTP Port:</label>
                                    <input type="text" required name="smtpPort" class="form-control text-white"
                                        id="smtp-port" value="<?php echo e($email->port); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="smtp-send-from" class="col-form-label" id="customSet">SMTP Send From Email:</label>
                                    <input type="text" required name="smtpSendFromEmail" class="form-control text-white"
                                        value="<?php echo e($email->emailFrom); ?>" id="smtp-send-from">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="smtp-send-from-name" class="col-form-label" id="customSet">SMTP Send From
                                        Name:</label>
                                    <input type="text" required name="smtpSendFromName" class="form-control text-white"
                                        value="<?php echo e($email->emailFromName); ?>" id="smtp-send-from-name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="SMTP-Send-From-Name" class="col-form-label" id="customSet">SMTP Send From Name:</label>
                                    <select name="status" class="form-control text-white" id="SMTP-Send-From-Name">
                                        <option value="1">Active</option>
                                        <option value="0">Not Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8 text-center">
                                <input type="submit" class="btn btn-primary customYellow" title="Update" />
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </form>
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
<?php echo $__env->make('layouts.app', ['pageSlug' => 'dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/Admin/MailConfigurationEdit.blade.php ENDPATH**/ ?>