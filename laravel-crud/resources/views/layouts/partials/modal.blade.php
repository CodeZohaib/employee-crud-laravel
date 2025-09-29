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
			<form id="editEmployeeForm" action="{{ route('employee.update', '__ID__') }}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')

				<x-input type="text"  :errorName="'editEmployee'" name="emp_id" class="form-control" hidden  />
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body" id="editEmployeeBody">					
					<div class="form-group">
						<label>Name</label>
						<x-input type="text"  :errorName="'editEmployee'" name="emp_name" class="form-control" placeholder="Ente Employee Name....!"  />
					</div>

					<div class="form-group">
						<label>Email</label>
						<x-input type="email" :errorName="'editEmployee'" name="emp_email" class="form-control" placeholder="Enter Employee Email....!" />
					</div>

					<div class="form-group">
						<label>Address</label>
						<x-textarea name="emp_address" :errorName="'editEmployee'" class="my-custom-class" placeholder="Enter Address...!" />

					</div>

					<div class="form-group">
						<label>Phone</label>
						<x-input type="text" :errorName="'editEmployee'" name="emp_phone" class="form-control" placeholder="Enter Phone Number.....!" />
					</div>

					<!-- Gender Field -->
					<div class="form-group">
						<x-radio-group 
							name="emp_gender" 
							label="Gender"
							:options="['Male', 'Female', 'Other']"
							selected="Male"
							:errorName="'editEmployee'"
					    />
					</div>

					<!-- Position Field -->
					<x-select-field 
						name="emp_position" 
						label="Position" 
						:options="config('constants.positions')" 
						selected="{{ old('emp_position') }}" 
						:errorName="'editEmployee'"
					/>



					<!-- Profile Picture Upload -->
					<div class="form-group">
						<x-file-upload name="profile_picture" label="Profile Picture" :errorName="'editEmployee'" />
						<img id="editProfilePreview" 
							src="" 
							alt="Current Profile Picture" 
							style="max-width: 120px; margin-top: 10px; display: none; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.2);" />
					</div>
				</div>
				<div id="editEmployeeAlert">
							{{-- Alert will show here --}}
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
							{{-- Alert will show here --}}
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
							{{-- Alert will show here --}}
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button class="btn btn-danger" id="deleteSingleRecord">Delete</button>
					
				</div>
			
		</div>
	</div>
</div>