<?php $__env->startSection('content'); ?>
<hr>
<h1>Insert Product Detail</h1>
<?php echo Form::open(['action' => 'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']); ?>

    <div class="form-group">
      <?php echo e(Form::label('name','Name')); ?>

      <?php echo e(Form::text('name','',['class' => 'form-control','placeholder'=>'Name'])); ?>

         </div>

         <div class="form-group">
            <?php echo e(Form::label('purchase_price','Purchase Price')); ?>

            <?php echo e(Form::number('purchase_price','',['class' => 'form-control','placeholder'=>'Purchase Price'])); ?>

               </div>

               <div class="form-group">
                  <?php echo e(Form::label('refill_price','Refill Price')); ?>

                  <?php echo e(Form::number('refill_price','',['class' => 'form-control','placeholder'=>'Refill Price'])); ?>

                     </div>

                     <div class="form-group">
                        <?php echo e(Form::label('image','Select image to upload')); ?><br>
                        <?php echo e(Form::file('image')); ?>

                           </div>

         <div class="form-group">
                <?php echo e(Form::label('comments','Comments')); ?>

                <?php echo e(Form::textarea('comments','',['class' => 'form-control','placeholder'=>'Comment Text'])); ?>

                   </div>
                   <?php echo e(Form::submit('Submit',['class'=>'btn btn-primary'])); ?>

<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trumacwaters\resources\views/posts/create.blade.php ENDPATH**/ ?>