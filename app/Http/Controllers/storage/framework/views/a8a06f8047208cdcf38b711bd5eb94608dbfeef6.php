<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <title><?php echo e(config('app.name','TrumacWaters')); ?></title>

        
    </head>
    <body>
            <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <br>
            <br>
      <div class='container'>
          <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
      </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\trumacwaters\resources\views/layouts/app.blade.php ENDPATH**/ ?>