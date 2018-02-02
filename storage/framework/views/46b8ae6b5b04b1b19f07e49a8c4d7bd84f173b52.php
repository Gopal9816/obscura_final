<?php $__env->startSection('content'); ?>

<!--<div class="page-header text-center">
    <h1>Welcome <?php echo e($user->name); ?></h1>
</div> 
<link href="<?php echo e(asset('css/lev1.css')); ?>" rel="stylesheet">-->
<div class="row">
    <div class="col-md-1 col-xs-1"></div>
    <div class="col-md-10 col-xs-10  rym animated fadeIn">
        <h2 id="rhyme" class="text-center" style="color:white;">
            Avanmar ith vare thanilla -_-.<br>
        </h2>
    </div>
    <div class="col-md-1 col-xs-1"></div>
</div>
<div class="row" >
    <div class="col-md-6 col-xs-12 col-md-offset-3  hand" align="center">
       <img src="../img/jwy.png" class="img-responsive">
    </div>

<div class="col-md-6 col-md-offset-3" style="padding-bottom: 20px;">        
    <?php echo Form::open(['action' => 'GameController@answer', 'method' => 'POST']); ?>

        <div class="form-group" align="center">
            <?php echo e(Form::label('answer','Answer')); ?>

            <?php echo e(Form::text('answer','',['class' => 'form-control','placeholder' => 'Your Answer'])); ?>

        </div>
    <?php echo e(Form::submit('Submit',['class' => 'btn btn-success editb'])); ?>

<?php echo Form::close(); ?>

</div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>