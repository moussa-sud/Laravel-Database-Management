

<?php $__env->startSection('content'); ?>

<table class="table">

    <br>

    

    <thead class="table-dark">
        

        <div class="row">
            <div class="col align-self-start">
                
                <a class="btn btn-primary" href="<?php echo e(route('products.create')); ?>" role="button">Create</a>

            </div>

        </div>
        
        <?php if($message = @Session::get('success')): ?>


        <div class="alert alert-success" role="alert"> 
            <?php echo e($message); ?>

        </dir>
            
        <?php endif; ?>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
                <th width='300px' scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><img width="100px" src="/images/<?php echo e($item->image); ?>"></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->details); ?></td>
                <td>
                    <a href="<?php echo e(route('products.edit', $item->id)); ?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo e(route('products.show', $item->id)); ?>" class="btn btn-info">Show</a>
                    

                    <form action="<?php echo e(route('products.destroy', $item->id)); ?>" method="post">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>


                    </form>

                </td>
            </tr>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>


    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('products/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MOUSSA\LaravelStart\product-app\resources\views/products/index.blade.php ENDPATH**/ ?>