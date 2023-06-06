 

 
 <?php $__env->startSection('title', 'title from sub file'); ?>
  
 <?php $__env->startSection('sidebar'); ?>
     <?php echo \Illuminate\View\Factory::parentPlaceholder('sidebar'); ?>
  
     <p>This is appended to the master sidebar.</p>
 <?php $__env->stopSection(); ?>
  
 <?php $__env->startSection('content'); ?>
     <p>This is my body content.</p>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kubra/Desktop/KitapSepeti/resources/views/home/index.blade.php ENDPATH**/ ?>