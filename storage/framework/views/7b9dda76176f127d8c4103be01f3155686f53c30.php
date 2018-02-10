<?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('css/rep.css')); ?>" rel="stylesheet">
<div class ="row rym animated fadeIn">
    
        <h3 id="rhyme" >OH DO!</h2>
        <h3 id="rhyme" >INDULGE an IDIOSYNCRASY</h2>
        <h3 id="rhyme" >make BULLETS of LEAD</h2>
        <h3 id="rhyme" >Reconcile DOG to CAT</h2>
        <h3 id="rhyme" >Lay KNIFE by FORK</h2>
        <h3 id="rhyme" >CONVERSE CHEERFULLY</h2>
        <h3 id="rhyme" >WEDNESDAY AFTERNOON</h2>
        <h3 id="rhyme" >COOK the DINNER</h2>
        <h3 id="rhyme" >SPREAD the BANQUET</h2>
        <h3 id="rhyme" >DEMAND a CORMORANT</h2>
    <br><br>
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