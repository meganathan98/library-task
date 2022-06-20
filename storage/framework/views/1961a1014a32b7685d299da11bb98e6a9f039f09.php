<?php $__env->startSection('content'); ?>
  
    <div class="p-6 border">
        <form method="POST" action="<?php echo e(route('assign-books')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <select class="form-select" name="book_id" aria-label="Default select example">
                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Student Name or Id</label>
              <input type="text" name="user" class="form-control" id="">
            </div>

            <button type="submit" class="btn btn-primary">Assign</button>
        </form>
    </div>

<?php $__env->stopSection(); ?>
               
          
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mathank/Documents/library/resources/views/assign.blade.php ENDPATH**/ ?>