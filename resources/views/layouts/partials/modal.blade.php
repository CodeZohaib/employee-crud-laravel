<!-- add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<form id="addEmployeeForm" action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
				@csrf

				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<x-input type="text"  :errorName="'addEmployee'" name="emp_name" class="form-control" placeholder="Ente Employee Name....!"  />
					</div>

					<div class="form-group">
						<label>Email</label>
						<x-input type="email" :errorName="'addEmployee'" name="emp_email" class="form-control" placeholder="Enter Employee Email....!" />
					</div>

					<div class="form-group">
						<label>Address</label>
						<x-textarea name="emp_address" :errorName="'addEmployee'" class="my-custom-class" placeholder="Enter Address...!" />

					</div>

					<div class="form-group">
						<label>Phone</label>
						<x-input type="text" :errorName="'addEmployee'" name="emp_phone" class="form-control" placeholder="Enter Phone Number.....!" />
					</div>

					<!-- Gender Field -->
					<div class="form-group">
						<x-radio-group 
							name="emp_gender" 
							label="Gender"
							:options="['Male', 'Female', 'Other']"
							selected="Male"
							:errorName="'addEmployee'"
					    />
					</div>

					<!-- Position Field -->
					<x-select-field 
						name="emp_position" 
						label="Position" 
						:options="config('constants.positions')" 
						selected="{{ old('emp_position') }}" 
						:errorName="'addEmployee'"
					/>



					<!-- Profile Picture Upload -->
					<div class="form-group">
						<x-file-upload name="profile_picture" label="Profile Picture" :errorName="'addEmployee'" />
					</div>
				</div>
				<div id="addEmployeeAlert">
							{{-- Alert will show here --}}
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
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>

					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>

					<!-- Gender Field -->
					<div class="form-group">
						<label>Gender</label><br>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
							<label class="form-check-label" for="male">Male</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" id="female" value="Female">
							<label class="form-check-label" for="female">Female</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" id="other" value="Other">
							<label class="form-check-label" for="other">Other</label>
						</div>
					</div>

					<!-- Position Field -->
					<div class="form-group">
						<label>Position</label>
						<select class="form-control" required>
							<option value="">Select Position</option>
							<option value="Manager">Manager</option>
							<option value="Developer">Developer</option>
							<option value="Designer">Designer</option>
							<option value="Sales">Sales</option>
							<option value="Other">Other</option>
						</select>
					</div>

					<!-- Profile Picture Upload -->
					<div class="form-group">
						<label>Profile Picture</label>
						<input type="file" class="form-control" accept="image/*" required>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>