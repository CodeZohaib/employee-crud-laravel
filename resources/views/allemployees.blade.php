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
						@if($employeeData!=null)
						<a href="#deleteEmployeeModal" id="deleteEmployeeModalbtn" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>	
						@endif					
					</div>
				</div>
			</div>
			<?php //dd($employeeData) ?>
			@if($employeeData!=null)
				
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
					@php $count=0; @endphp
					@foreach ($employeeData as $employee)
					@php $count++; @endphp
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox"  class="checkbox{{ $count }}" name="options[]" value="{{ secure_encrypt($employee->id) }}">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>{{ $employee->full_name }}</td>
						<td>{{ $employee->email }}</td>
						<td>{{ $employee->address }}</td>
						<td>{{ $employee->phone_no }}</td>
						<td>
							<a href="#editEmployeeModal" edit="{{ secure_encrypt($employee->id) }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal"  delete="{{ secure_encrypt($employee->id) }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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
				<div class="alert alert-info text-center" role="alert">
					No employees found. Please add a new employee to get started.
				</div>

			@endif
		</div>
	</div>        
</div>
@endsection

@section('modal')
  @include('layouts.partials.modal')
@endsection