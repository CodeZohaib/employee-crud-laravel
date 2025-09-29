

<?php $__env->startSection('title'); ?>
 View All Employee
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" id="employeeModalbtn" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
						<?php if($employeeData!=null): ?>
						<a href="#deleteEmployeeModal" id="deleteEmployeeModalbtn" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>	
						<?php endif; ?>					
					</div>
				</div>
			</div>
			<?php //dd($employeeData) ?>
			<?php if($employeeData!=null): ?>
				
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php $count=0; ?>
					<?php $__currentLoopData = $employeeData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $count++; ?>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox"  class="checkbox<?php echo e($count); ?>" name="options[]" value="<?php echo e(secure_encrypt($employee->id)); ?>">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td> <a href="<?php echo e(route('employee.viewData', urlencode(secure_encrypt($employee->id)))); ?>"><?php echo e(ucwords($employee->full_name)); ?></td>
						<td><?php echo e($employee->email); ?></td>
						<td><?php echo e($employee->address); ?></td>
						<td><?php echo e($employee->phone_no); ?></td>
						<td>
							<div class="btn-group" role="group" aria-label="Employee Actions">
								<a href="<?php echo e(route('employee.viewData', urlencode(secure_encrypt($employee->id)))); ?>" class="btn btn-action">
									<i class="material-icons">&#xE8F4;</i>
								</a>
								<a href="#editEmployeeModal" edit="<?php echo e(secure_encrypt($employee->id)); ?>" class="btn btn-action edit" data-toggle="modal" title="Edit">
									<i class="material-icons">&#xE254;</i>
								</a>
								<a href="#deleteSingleEmployee" delete="<?php echo e(secure_encrypt($employee->id)); ?>" class="btn btn-action empDeleteBtn" data-toggle="modal" title="Delete">
									<i class="material-icons">&#xE872;</i>
								</a>
							</div>
						</td>

					</tr>
					
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">
					Showing <b><?php echo e($employeeData->count()); ?></b> out of <b><?php echo e($employeeData->total()); ?></b> entries
				</div>
				<?php echo e($employeeData->links('pagination::bootstrap-4')); ?>

			</div>
			<?php else: ?>
				<div class="alert alert-info text-center" role="alert">
					No employees found. Please add a new employee to get started.
				</div>

			<?php endif; ?>
		</div>
	</div>        
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>
  <?php echo $__env->make('layouts.partials.modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vol2_8/infinityfree.com/if0_40043819/htdocs/laravel-crud/resources/views/allemployees.blade.php ENDPATH**/ ?>