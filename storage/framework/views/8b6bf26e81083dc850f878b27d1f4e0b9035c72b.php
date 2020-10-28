

<?php $__env->startSection('content'); ?>



<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Email Configuration</h4>
                        </div>
                        <div class="col-4 text-right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addEmail">Add</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="">
                        <table class="table tablesorter ">
                            <thead class=" text-primary">
                                <tr>
                                    <th scope="col">id</th>
                                    <th>Email Host</th>
                                    <th>Email Username</th>
                                    <th>Email Port</th>
                                    <th>Email Send From</th>
                                    <th>Email Name</th>
                                    <th>Status</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$key); ?></td>
                                    <td><?php echo e($email->host); ?></td>
                                    <td><?php echo e($email->username); ?></td>
                                    <td><?php echo e($email->port); ?></td>
                                    <td><?php echo e($email->emailFrom); ?></td>
                                    <td><?php echo e($email->emailFromName); ?></td>
                                    <td><?php echo e($email->status ? "Active" : "Not Active"); ?></td>
                                    <td><a href="<?php echo e(route('email-config.edit', $email->id)); ?>" class="btn btn-sm">Edit</a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>




        </div>
    </div>
    <div class="modal fade" id="addEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New SMTP Configuration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo e(route('email-config.store')); ?>" name="addEmailForm">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="smtp-host" class="col-form-label">SMTP Host:</label>
                            <input type="text" required name="smtpHost" class="form-control text-dark" id="smtp-host">
                        </div>
                        <div class="form-group">
                            <label for="smtp-username" class="col-form-label">SMTP Username:</label>
                            <input type="text" required class="form-control text-dark" name="smtpUsername"
                                id="smtp-username">
                        </div>
                        <div class="form-group">
                            <label for="smtp-password" class="col-form-label">SMTP Password:</label>
                            <input type="text" required name="smtpPassword" class="form-control text-dark"
                                id="smtp-password">
                        </div>
                        <div class="form-group">
                            <label for="smtp-port" class="col-form-label">SMTP Port:</label>
                            <input type="text" required name="smtpPort" class="form-control text-dark" id="smtp-port">
                        </div>
                        <div class="form-group">
                            <label for="smtp-send-from" class="col-form-label">SMTP Send From Email:</label>
                            <input type="text" required name="smtpSendFromEmail" class="form-control text-dark"
                                id="smtp-send-from">
                        </div>
                        <div class="form-group">
                            <label for="smtp-send-from-name" class="col-form-label">SMTP Send From Email:</label>
                            <input type="text" required name="smtpSendFromName" class="form-control text-dark"
                                id="smtp-send-from-name">
                        </div>
                        <div class="form-group">
                            <label for="SMTP-Send-From-Name" class="col-form-label">SMTP Send From Name:</label>
                            <select name="status" class="form-control text-dark" id="SMTP-Send-From-Name">
                                <option value="1">Active</option>
                                <option value="0">Not Active</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
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
          $('#addEmailForm').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var host = button.data('host');
        var modal = $(this)
        modal.find('.modal-body #smtp-host').val(host)
        })
        });
    </script>
    <?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', ['pageSlug' => 'dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/Admin/MailConfiguration.blade.php ENDPATH**/ ?>