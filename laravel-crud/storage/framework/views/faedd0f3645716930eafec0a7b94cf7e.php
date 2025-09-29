<!-- add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="addEmployeeForm" action="<?php echo e(route('employee.store')); ?>" method="POST" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>

				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['type' => 'text','errorName' => 'addEmployee','name' => 'emp_name','class' => 'form-control','placeholder' => 'Ente Employee Name....!']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','errorName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('addEmployee'),'name' => 'emp_name','class' => 'form-control','placeholder' => 'Ente Employee Name....!']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
					</div>

					<div class="form-group">
						<label>Email</label>
						<?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['type' => 'email','errorName' => 'addEmployee','name' => 'emp_email','class' => 'form-control','placeholder' => 'Enter Employee Email....!']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'email','errorName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('addEmployee'),'name' => 'emp_email','class' => 'form-control','placeholder' => 'Enter Employee Email....!']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
					</div>

					<div class="form-group">
						<label>Address</label>
						<?php if (isset($component)) { $__componentOriginal4727f9fd7c3055c2cf9c658d89b16886 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4727f9fd7c3055c2cf9c658d89b16886 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.textarea','data' => ['name' => 'emp_address','errorName' => 'addEmployee','class' => 'my-custom-class','placeholder' => 'Enter Address...!']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'emp_address','errorName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('addEmployee'),'class' => 'my-custom-class','placeholder' => 'Enter Address...!']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4727f9fd7c3055c2cf9c658d89b16886)): ?>
<?php $attributes = $__attributesOriginal4727f9fd7c3055c2cf9c658d89b16886; ?>
<?php unset($__attributesOriginal4727f9fd7c3055c2cf9c658d89b16886); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4727f9fd7c3055c2cf9c658d89b16886)): ?>
<?php $component = $__componentOriginal4727f9fd7c3055c2cf9c658d89b16886; ?>
<?php unset($__componentOriginal4727f9fd7c3055c2cf9c658d89b16886); ?>
<?php endif; ?>

					</div>

					<div class="form-group">
						<label>Phone</label>
						<?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['type' => 'text','errorName' => 'addEmployee','name' => 'emp_phone','class' => 'form-control','placeholder' => 'Enter Phone Number.....!']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','errorName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('addEmployee'),'name' => 'emp_phone','class' => 'form-control','placeholder' => 'Enter Phone Number.....!']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
					</div>

					<!-- Gender Field -->
					<div class="form-group">
						<?php if (isset($component)) { $__componentOriginal1c40de9a72044a5e26ad8a751d2b6ce0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1c40de9a72044a5e26ad8a751d2b6ce0 = $attributes; } ?>
<?php $component = App\View\Components\RadioGroup::resolve(['name' => 'emp_gender','label' => 'Gender','options' => ['Male', 'Female', 'Other'],'selected' => 'Male','errorName' => 'addEmployee'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('radio-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\RadioGroup::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1c40de9a72044a5e26ad8a751d2b6ce0)): ?>
<?php $attributes = $__attributesOriginal1c40de9a72044a5e26ad8a751d2b6ce0; ?>
<?php unset($__attributesOriginal1c40de9a72044a5e26ad8a751d2b6ce0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c40de9a72044a5e26ad8a751d2b6ce0)): ?>
<?php $component = $__componentOriginal1c40de9a72044a5e26ad8a751d2b6ce0; ?>
<?php unset($__componentOriginal1c40de9a72044a5e26ad8a751d2b6ce0); ?>
<?php endif; ?>
					</div>

					<!-- Position Field -->
					<?php if (isset($component)) { $__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b = $attributes; } ?>
<?php $component = App\View\Components\SelectField::resolve(['name' => 'emp_position','label' => 'Position','options' => config('constants.positions'),'selected' => ''.e(old('emp_position')).'','errorName' => 'addEmployee'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SelectField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b)): ?>
<?php $attributes = $__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b; ?>
<?php unset($__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b)): ?>
<?php $component = $__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b; ?>
<?php unset($__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b); ?>
<?php endif; ?>



					<!-- Profile Picture Upload -->
					<div class="form-group">
						<?php if (isset($component)) { $__componentOriginal7a626df4d92ac9f457824a14a3a3b2b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7a626df4d92ac9f457824a14a3a3b2b9 = $attributes; } ?>
<?php $component = App\View\Components\FileUpload::resolve(['name' => 'profile_picture','label' => 'Profile Picture','errorName' => 'addEmployee'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('file-upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FileUpload::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7a626df4d92ac9f457824a14a3a3b2b9)): ?>
<?php $attributes = $__attributesOriginal7a626df4d92ac9f457824a14a3a3b2b9; ?>
<?php unset($__attributesOriginal7a626df4d92ac9f457824a14a3a3b2b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a626df4d92ac9f457824a14a3a3b2b9)): ?>
<?php $component = $__componentOriginal7a626df4d92ac9f457824a14a3a3b2b9; ?>
<?php unset($__componentOriginal7a626df4d92ac9f457824a14a3a3b2b9); ?>
<?php endif; ?>
					</div>
				</div>
				<div id="addEmployeeAlert">
							
				</div>

				<div class="modal-footer">
					 
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
					<input type="submit" class="btn btn-success" value="Add" />
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="editEmployeeForm" action="<?php echo e(route('employee.update', '__ID__')); ?>" method="POST" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
				<?php echo method_field('PUT'); ?>

				<?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['type' => 'text','errorName' => 'editEmployee','name' => 'emp_id','class' => 'form-control','hidden' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','errorName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('editEmployee'),'name' => 'emp_id','class' => 'form-control','hidden' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body" id="editEmployeeBody">					
					<div class="form-group">
						<label>Name</label>
						<?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['type' => 'text','errorName' => 'editEmployee','name' => 'emp_name','class' => 'form-control','placeholder' => 'Ente Employee Name....!']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','errorName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('editEmployee'),'name' => 'emp_name','class' => 'form-control','placeholder' => 'Ente Employee Name....!']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
					</div>

					<div class="form-group">
						<label>Email</label>
						<?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['type' => 'email','errorName' => 'editEmployee','name' => 'emp_email','class' => 'form-control','placeholder' => 'Enter Employee Email....!']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'email','errorName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('editEmployee'),'name' => 'emp_email','class' => 'form-control','placeholder' => 'Enter Employee Email....!']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
					</div>

					<div class="form-group">
						<label>Address</label>
						<?php if (isset($component)) { $__componentOriginal4727f9fd7c3055c2cf9c658d89b16886 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4727f9fd7c3055c2cf9c658d89b16886 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.textarea','data' => ['name' => 'emp_address','errorName' => 'editEmployee','class' => 'my-custom-class','placeholder' => 'Enter Address...!']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'emp_address','errorName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('editEmployee'),'class' => 'my-custom-class','placeholder' => 'Enter Address...!']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4727f9fd7c3055c2cf9c658d89b16886)): ?>
<?php $attributes = $__attributesOriginal4727f9fd7c3055c2cf9c658d89b16886; ?>
<?php unset($__attributesOriginal4727f9fd7c3055c2cf9c658d89b16886); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4727f9fd7c3055c2cf9c658d89b16886)): ?>
<?php $component = $__componentOriginal4727f9fd7c3055c2cf9c658d89b16886; ?>
<?php unset($__componentOriginal4727f9fd7c3055c2cf9c658d89b16886); ?>
<?php endif; ?>

					</div>

					<div class="form-group">
						<label>Phone</label>
						<?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['type' => 'text','errorName' => 'editEmployee','name' => 'emp_phone','class' => 'form-control','placeholder' => 'Enter Phone Number.....!']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','errorName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('editEmployee'),'name' => 'emp_phone','class' => 'form-control','placeholder' => 'Enter Phone Number.....!']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
					</div>

					<!-- Gender Field -->
					<div class="form-group">
						<?php if (isset($component)) { $__componentOriginal1c40de9a72044a5e26ad8a751d2b6ce0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1c40de9a72044a5e26ad8a751d2b6ce0 = $attributes; } ?>
<?php $component = App\View\Components\RadioGroup::resolve(['name' => 'emp_gender','label' => 'Gender','options' => ['Male', 'Female', 'Other'],'selected' => 'Male','errorName' => 'editEmployee'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('radio-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\RadioGroup::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1c40de9a72044a5e26ad8a751d2b6ce0)): ?>
<?php $attributes = $__attributesOriginal1c40de9a72044a5e26ad8a751d2b6ce0; ?>
<?php unset($__attributesOriginal1c40de9a72044a5e26ad8a751d2b6ce0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c40de9a72044a5e26ad8a751d2b6ce0)): ?>
<?php $component = $__componentOriginal1c40de9a72044a5e26ad8a751d2b6ce0; ?>
<?php unset($__componentOriginal1c40de9a72044a5e26ad8a751d2b6ce0); ?>
<?php endif; ?>
					</div>

					<!-- Position Field -->
					<?php if (isset($component)) { $__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b = $attributes; } ?>
<?php $component = App\View\Components\SelectField::resolve(['name' => 'emp_position','label' => 'Position','options' => config('constants.positions'),'selected' => ''.e(old('emp_position')).'','errorName' => 'editEmployee'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SelectField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b)): ?>
<?php $attributes = $__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b; ?>
<?php unset($__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b)): ?>
<?php $component = $__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b; ?>
<?php unset($__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b); ?>
<?php endif; ?>



					<!-- Profile Picture Upload -->
					<div class="form-group">
						<?php if (isset($component)) { $__componentOriginal7a626df4d92ac9f457824a14a3a3b2b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7a626df4d92ac9f457824a14a3a3b2b9 = $attributes; } ?>
<?php $component = App\View\Components\FileUpload::resolve(['name' => 'profile_picture','label' => 'Profile Picture','errorName' => 'editEmployee'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('file-upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FileUpload::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7a626df4d92ac9f457824a14a3a3b2b9)): ?>
<?php $attributes = $__attributesOriginal7a626df4d92ac9f457824a14a3a3b2b9; ?>
<?php unset($__attributesOriginal7a626df4d92ac9f457824a14a3a3b2b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a626df4d92ac9f457824a14a3a3b2b9)): ?>
<?php $component = $__componentOriginal7a626df4d92ac9f457824a14a3a3b2b9; ?>
<?php unset($__componentOriginal7a626df4d92ac9f457824a14a3a3b2b9); ?>
<?php endif; ?>
						<img id="editProfilePreview" 
							src="" 
							alt="Current Profile Picture" 
							style="max-width: 120px; margin-top: 10px; display: none; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.2);" />
					</div>
				</div>
				<div id="editEmployeeAlert">
							
				</div>

				<div class="modal-footer">
					 
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
					<input type="submit" class="btn btn-success" value="Update" id="editEmployeeSubmit" />
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Multiple Checkbox Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div id="deleteEmployeeAlert">
							
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button class="btn btn-danger" id="deleteMultRecord">Delete</button>
					
				</div>
			
		</div>
	</div>
</div>


<!-- Delete Single Employee Modal HTML -->
<div id="deleteSingleEmployee" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div id="deleteSingleEmployeeAlert">
							
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button class="btn btn-danger" id="deleteSingleRecord">Delete</button>
					
				</div>
			
		</div>
	</div>
</div><?php /**PATH /home/vol2_8/infinityfree.com/if0_40043819/htdocs/laravel-crud/resources/views/layouts/partials/modal.blade.php ENDPATH**/ ?>