<?php $__env->startSection('title'); ?>
 View All Data
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="card p-4">
        <div class="text-center">
          <center> <img src="<?php echo e(asset($employee->profile_pic_path)); ?>" 
             alt="<?php echo e($employee->full_name); ?>" 
             class="img-fluid employee-img mb-3" 
             width="300" height="150"></center>

            <h3 class="mb-0"><?php echo e(ucwords($employee->full_name)); ?></h3>
            <p class="text-muted"><?php echo e(ucwords($employee->position)); ?></p>
        </div>
        <hr>
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th scope="row">Email:</th>
                    <td><?php echo e($employee->email); ?></td>
                </tr>
                <tr>
                    <th scope="row">Phone:</th>
                    <td><?php echo e($employee->phone_no); ?></td>
                </tr>
                <tr>
                    <th scope="row">Address:</th>
                    <td><?php echo e($employee->address); ?></td>
                </tr>
                <tr>
                    <th scope="row">Gender:</th>
                    <td><?php echo e($employee->gender); ?></td>
                </tr>
                <tr>
                    <th scope="row">Joined:</th>
                    <td><?php echo e($employee->created_at); ?></td>
                </tr>
            </tbody>
        </table>
        <div class="text-center mt-3">
            <a href="<?php echo e(url()->previous()); ?>" class="btn btn-secondary">
                <i class="fa fa-arrow-left"></i> Back
            </a>
            <!--<a href="edit-employee.html" class="btn btn-warning">
                <i class="fa fa-pencil"></i> Edit
            </a> -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vol2_8/infinityfree.com/if0_40043819/htdocs/laravel-crud/resources/views/showEmployee.blade.php ENDPATH**/ ?>