

<?php $__env->startSection('content'); ?>

<br>

<div class="row">

    <div class="col align-self-start">
        
        <a class="btn btn-primary" href="<?php echo e(route('products.index')); ?>" role="button">All Products</a>
    </div>

</div>


<?php if($errors->any()): ?>

    <div class="alert alert-danger" role="alert">
        
        <ul>
            <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <li><?php echo e($item); ?></li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </ul>

    </div>
    
<?php else: ?>
    
<?php endif; ?>

<br>



<form action="<?php echo e(route('products.store')); ?>" method="post" enctype="multipart/form-data">
 <?php echo csrf_field(); ?>
<div class="container p-5">

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Details textarea</label>
        <textarea name="details" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div> 

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Image</label>
        <input name="image" type="file" class="form-control" id="exampleFormControlTextarea1" rows="3">
    </div> 

</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MOUSSA\LaravelStart\product-app\resources\views/products/create.blade.php ENDPATH**/ ?>