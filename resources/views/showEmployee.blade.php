@extends('layouts.master')

@section('title')
 View All Data
@endsection

@section('content')

<div class="container mt-5">
    <div class="card p-4">
        <div class="text-center">
           <center><img src="{{ $employee->profile_pic_path ? asset('storage/'.$employee->profile_pic_path) : asset('storage/profile_pictures/profile.jpg') }}" 
     alt="{{ $employee->full_name }}" class="img-fluid employee-img mb-3" width="300" height="150"></center>

            <h3 class="mb-0">{{ ucwords($employee->full_name) }}</h3>
            <p class="text-muted">{{ ucwords($employee->position) }}</p>
        </div>
        <hr>
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th scope="row">Email:</th>
                    <td>{{ $employee->email }}</td>
                </tr>
                <tr>
                    <th scope="row">Phone:</th>
                    <td>{{ $employee->phone_no }}</td>
                </tr>
                <tr>
                    <th scope="row">Address:</th>
                    <td>{{ $employee->address }}</td>
                </tr>
                <tr>
                    <th scope="row">Gender:</th>
                    <td>{{ $employee->gender }}</td>
                </tr>
                <tr>
                    <th scope="row">Joined:</th>
                    <td>{{ $employee->created_at }}</td>
                </tr>
            </tbody>
        </table>
        <div class="text-center mt-3">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                <i class="fa fa-arrow-left"></i> Back
            </a>
            <!--<a href="edit-employee.html" class="btn btn-warning">
                <i class="fa fa-pencil"></i> Edit
            </a> -->
        </div>
    </div>
</div>
@endsection
