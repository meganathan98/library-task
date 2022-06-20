<?php $__env->startSection('content'); ?>
        
    <div>
        <h1 class="text-center">Book Details</h1>
    </div>

    <div>
        <div class="p-6 border">
            <h1 class="text-secondary fs-4">Book Status : <span class="text-primary"><?php echo e($book->user_name===null? "Available":"Taken"); ?></span></h1>

            <h1 class="text-secondary fs-4">Book ID : <?php echo e($book->book_id); ?></h1>
            <h1 class="text-secondary fs-4">Book Name : <?php echo e($book->name); ?></h1>
            <h1 class="text-secondary fs-4">Taken By : <?php echo e($book->user_name); ?></h1>
            <?php if($book->user_name != null): ?>
                <div class="border mt-2 p-3">
                    <p>book returned ?</p>
                    <a href="<?php echo e(route('status-update', $book->id)); ?>" class="text-primary underline">Returned</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mathank/Documents/library/resources/views/view-book.blade.php ENDPATH**/ ?>