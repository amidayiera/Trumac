<?php $__env->startSection('content'); ?>
<br>
<h1>Water products</h1>
<?php if(count($posts)>0): ?>
   <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
   <div class="card card body bg-light ">
       <div class="row">
           <div class="col-md-4 col-sm-4">
               <img style="width:100%"  scr="/storage/images/<?php echo e($post->image); ?>">
           </div>
           <div class="col-md-8 col-sm-8">
        <h3><a href="/trumacwaters/public/posts/<?php echo e($post->id); ?>"><?php echo e($post->name); ?></a></h3>
        <small>Written on <?php echo e($post->created_at); ?></small>
           </div>
       </div>
    </div><br>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   <?php echo e($posts->links()); ?>

<?php else: ?>
    <p>No posts found</p>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trumacwaters\resources\views/posts/index.blade.php ENDPATH**/ ?>