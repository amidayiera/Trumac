<?php $__env->startSection('content'); ?>
<hr>
<a href="/trumacwaters/public/posts/" class="btn btn btn-outline-secondary">Go Back</a>
<h1><?php echo e($post->title); ?></h1>
<img style="width:100%"  scr="/storage/images/<?php echo e($post->image); ?>">
<br><br>
      <h5>Purchase Price:
       <?php echo e($post->purchase_price); ?>

       <h5>Refill Price:
        <?php echo e($post->refill_price); ?><br>
    <?php echo e($post->comments); ?></h5>
</div>
<br>
<small>Written on <?php echo e($post->created_at); ?></small>
<hr>
<a href="/trumacwaters/public/posts/<?php echo e($post->id); ?>/edit" class="btn btn-outline-secondary">Edit</a>

<?php echo Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right']); ?>

<?php echo e(Form::hidden('_method','DELETE')); ?>

<?php echo e(Form::submit('Delete',['class'=>'btn btn-danger'])); ?>


<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trumacwaters\resources\views/posts/show.blade.php ENDPATH**/ ?>