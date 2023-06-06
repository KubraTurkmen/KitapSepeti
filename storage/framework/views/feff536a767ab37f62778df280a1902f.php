
<html>
    <head>
        <title>App Name - <?php echo $__env->yieldContent('title'); ?></title>

        <?php echo $__env->yieldContent('head'); ?>

    </head>
    <body>

    <h1>Header</h1>

        <?php $__env->startSection('sidebar'); ?>
            This is the master sidebar.
        <?php echo $__env->yieldSection(); ?>
 
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <h1>Footer</h1>

        <?php echo $__env->yieldContent('foot'); ?>

    </body>
</html><?php /**PATH /Users/kubra/Desktop/KitapSepeti/resources/views/layouts/frontbase.blade.php ENDPATH**/ ?>