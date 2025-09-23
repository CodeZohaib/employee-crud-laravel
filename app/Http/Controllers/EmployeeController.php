<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('allemployees');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //dd($request->all());
         $request->validate([
        'emp_name' => 'required|string|max:255',
        'emp_address' => 'required|string|max:500',
        'emp_email' => 'required|email|unique:employees,email',
        'emp_position' => 'required|string|max:255',
        'emp_phone' => 'required|string|max:20|regex:/^\+92\d{3}-\d{7}$/',
        'emp_gender' => ['required','in:Male,Female,Other'],
        'profile_picture' => [
            'required',
            'image',
            'mimes:jpg,jpeg,png',
            'max:2048'
        ],
        ], [
            // Custom error messages
            'emp_name.required' => 'Employee name is required.',
            'emp_name.string' => 'Employee name must be a valid string.',
            'emp_name.max' => 'Employee name cannot exceed 255 characters.',

            'emp_address.required' => 'Employee address is required.',
            'emp_address.string' => 'Employee address must be a valid string.',
            'emp_address.max' => 'Employee address cannot exceed 500 characters.',

            'emp_email.required' => 'Employee email is required.',
            'emp_email.email' => 'Please enter a valid email address.',
            'emp_email.unique' => 'This email is already registered.',

            'emp_position.required' => 'Employee position is required.',
            'emp_position.string' => 'Position must be a valid string.',
            'emp_position.max' => 'Position cannot exceed 255 characters.',

            'emp_phone.required' => 'Phone number is required.',
            'emp_phone.regex' => 'Phone number format must be like +92000-0000000.',

            'emp_gender.required' => 'Please select a gender.',
            'emp_gender.in' => 'Gender must be Male, Female, or Other.',

            'profile_picture.required' => 'Profile picture is required.',
            'profile_picture.image' => 'The uploaded file must be an image.',
            'profile_picture.mimes' => 'Only JPG, JPEG, and PNG formats are allowed.',
            'profile_picture.max' => 'Profile picture must not exceed 2MB in size.',
        ]);

       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('showEmployee');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
