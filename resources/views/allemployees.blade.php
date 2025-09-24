@extends('layouts.master')

@section('title')
 View All Employee
@endsection

@section('content')
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
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
				</div>
			</div>
			<?php //dd($employeeData) ?>
			@if(!empty($employeeData))
				
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
					@foreach ($employeeData as $employee)
					
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>{{ $employee->full_name }}</td>
						<td>{{ $employee->email }}</td>
						<td>{{ $employee->address }}</td>
						<td>{{ $employee->phone_no }}</td>
						<td>
							<a href="#editEmployeeModal" edit="{{ encrypt($employee->id) }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal"  delete="{{ encrypt($employee->id) }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					
					@endforeach
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">
					Showing <b>{{ $employeeData->count() }}</b> out of <b>{{ $employeeData->total() }}</b> entries
				</div>
				{{ $employeeData->links('pagination::bootstrap-4') }}
			</div>
			@else
				<div class="alert alert-danger"><center>Employee Not Created.....!</center></div>
			@endif
		</div>
	</div>        
</div>
@endsection

@section('modal')
  @include('layouts.partials.modal')
@endsection