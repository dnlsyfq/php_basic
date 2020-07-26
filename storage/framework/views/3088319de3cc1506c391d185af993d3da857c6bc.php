<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">
                Hello
                <?php echo e($name); ?> !
            </h1>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/danialsyafiq/Code/PHP/LaravelPro/resources/views/about.blade.php ENDPATH**/ ?>