<?php $__env->startSection('content'); ?>
        
    <div>
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Booke Id</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">View</th>
                    </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($item->id); ?></th>
                    <td><?php echo e($item->book_id); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->user_name===null? "Available":"Taken"); ?></td>
                    <td><a href="<?php echo e(route('view-book',$item->id)); ?>" class="text-primary ">View</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            </table>

            <div>
                <?php echo $books->links(); ?>

            </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mathank/Documents/library/resources/views/books.blade.php ENDPATH**/ ?>