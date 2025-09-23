<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;

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
    public function store(StoreEmployeeRequest $request)
    {       
         if($request->hasFile('profile_picture'))
         {
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            // Save the path in the database or perform other operations
            Employee::create([
                'full_name' => $request->input('emp_name'),
                'gender' => $request->input('emp_gender'),
                'address' => $request->input('emp_address'),
                'email' => $request->input('emp_email'),
                'position' => $request->input('emp_position'),
                'phone_no' => $request->input('emp_phone'),
                'profile_pic_path' => $path
            ]);

            // JSON response for AJAX
            return response()->json([
                'success' => true,
                'message' => 'Employee created successfully!',
            ]);
         }
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
