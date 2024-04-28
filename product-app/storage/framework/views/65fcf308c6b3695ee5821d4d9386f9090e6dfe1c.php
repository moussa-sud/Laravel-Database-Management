

<?php $__env->startSection('content'); ?>


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



<form action="<?php echo e(route('products.update' , $product->id )); ?>" method="post" enctype="multipart/form-data" >
    <?php echo csrf_field(); ?>

    
     
    <?php echo method_field('PUT'); ?>

    <div class="container p-5">

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input name="name" type="text" value="<?php echo e($product->name); ?>" class="form-control" >
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Details textarea</label>
        <textarea name="details" class="form-control"  rows="3"><?php echo e($product->details); ?></textarea>
    </div> 

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Image</label>

        <img width="100px" src="/images/<?php echo e($product->image); ?>">

        <input name="image" type="file" class="form-control" rows="3">
    </div> 

</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MOUSSA\LaravelStart\product-app\resources\views/products/edit.blade.php ENDPATH**/ ?>