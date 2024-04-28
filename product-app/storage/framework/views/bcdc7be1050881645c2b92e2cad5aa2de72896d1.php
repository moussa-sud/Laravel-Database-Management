

<?php $__env->startSection('content'); ?>


<div class="row">

    <div class="col align-self-start">
        
        <a class="btn btn-primary" href="<?php echo e(route('products.index')); ?>" role="button">All Products</a>
    </div>

</div>




<br>





<div style="margin-left: 80px" class="container p-5">

    <div class="mb-3">

        
        <h3> NAME : <?php echo e($product->name); ?> </h3>

    </div>

    <br>

    <div class="mb-3">
        
        <p> <?php echo e($product->details); ?> </p>

    </div>

    <br>


    <div class="mb-3">

        <img width="100px" src="/images/<?php echo e($product->image); ?>">

    </div> 

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MOUSSA\LaravelStart\product-app\resources\views/products/show.blade.php ENDPATH**/ ?>