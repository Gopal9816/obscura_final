<?php $__env->startSection('content'); ?>


<div class="col-md-6 col-md-offset-3" align="center">
    <audio controls>
        <source src="<?php echo e(asset('audio/level2.wav')); ?>" type="audio/wav">

    </audio>
</div>







<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>