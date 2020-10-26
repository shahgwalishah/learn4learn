<?php if(session($key ?? 'status')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(session($key ?? 'status')); ?>

    </div>
<?php endif; ?>
<?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/alerts/success.blade.php ENDPATH**/ ?>