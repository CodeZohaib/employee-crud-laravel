@extends('layouts.master')

@section('title')
 View All Data
@endsection

@section('content')
<div class="container mt-5">
    <div class="card p-4">
        <div class="text-center">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Employee" class="employee-img mb-3">
            <h3 class="mb-0">Thomas Hardy</h3>
            <p class="text-muted">Software Engineer</p>
        </div>
        <hr>
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th scope="row">Email:</th>
                    <td>thomas.hardy@example.com</td>
                </tr>
                <tr>
                    <th scope="row">Phone:</th>
                    <td>(171) 555-2222</td>
                </tr>
                <tr>
                    <th scope="row">Address:</th>
                    <td>89 Chiaroscuro Rd, Portland, USA</td>
                </tr>
                <tr>
                    <th scope="row">Gender:</th>
                    <td>Male</td>
                </tr>
                <tr>
                    <th scope="row">Country:</th>
                    <td>United States</td>
                </tr>
                <tr>
                    <th scope="row">Joined:</th>
                    <td>15 Jan, 2024</td>
                </tr>
            </tbody>
        </table>
        <div class="text-center mt-3">
            <a href="index.html" class="btn btn-secondary">
                <i class="fa fa-arrow-left"></i> Back
            </a>
            <!--<a href="edit-employee.html" class="btn btn-warning">
                <i class="fa fa-pencil"></i> Edit
            </a> -->
        </div>
    </div>
</div>
@endsection
