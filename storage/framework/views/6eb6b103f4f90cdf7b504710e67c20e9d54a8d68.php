<?php $__env->startSection('content'); ?>

    
    <?php if(session('success')): ?>
        <div class="alert alert-success m-4 ">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
  
    <div class="p-6 border">
        <form method="POST" action="<?php echo e(route('store-books')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="" class="form-label">Book name</label>
                <input type="text" name="name" required class="form-control" id="">
              </div>
            <button type="submit" class="btn btn-primary">Add Book</button>
        </form>
    </div>

<?php $__env->stopSection(); ?>
               
          
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mathank/Documents/library/resources/views/add-books.blade.php ENDPATH**/ ?>