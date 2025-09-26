<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Helpers\helpers;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employeeData=Employee::orderby('id','desc')->paginate(15); 

        // Check  record is empty or not
        if ($employeeData->isEmpty()) {
            $employeeData = null;
        }
        return view('allemployees',compact('employeeData')); 
        
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

    public function destroyMultiRecord(Request $request)
    {
        $deleteIDEncrypt = json_decode($request->input('deleteID'), true);

        if (empty($deleteIDEncrypt) || !is_array($deleteIDEncrypt)) {
            return response()->json([
                'status' => 'error',
                'message' => "<div class='alert alert-danger'>Please select at least one employee to delete.</div>"
            ]);
        }

        $deleteIDDecrypt = [];
        $deleteUserNo = [];
        $invalidUserNo = [];

        foreach ($deleteIDEncrypt as $index => $encryptedId) {
            try {
                $id = secure_decrypt($encryptedId);

                if (!$id || !is_numeric($id)) {
                    $invalidUserNo[] = $index + 1;
                    continue;
                }

                if (Employee::find($id)) {
                    $deleteIDDecrypt[] = $id;
                    $deleteUserNo[] = $index + 1;
                } else {
                    $invalidUserNo[] = $index + 1;
                }
            } catch (\Exception $e) {
                $invalidUserNo[] = $index + 1;
            }
        }

        if ($deleteIDDecrypt) {
            $employees = Employee::whereIn('id', $deleteIDDecrypt)->get();

            foreach ($employees as $emp) {
                if (!empty($emp->profile_pic_path) && Storage::disk('public')->exists($emp->profile_pic_path)) {
                    Storage::disk('public')->delete($emp->profile_pic_path);
                }
            }

            Employee::whereIn('id', $deleteIDDecrypt)->delete();
        }
        

        //Bootstrap-Friendly Messagew
        $messages = [];
        if ($deleteUserNo) {
            $messages[] = "<div class='alert alert-success mb-2'>Employee "
                . (count($deleteUserNo) > 1 ? 's #' : '')
                . implode(', ', $deleteUserNo)
                . " deleted successfully.</div>";
        }

        if ($invalidUserNo) {
            $messages[] = "<div class='alert alert-danger'>Employee "
                . (count($invalidUserNo) > 1 ? 's #' : '')
                . implode(', ', $invalidUserNo)
                . " could not be deleted (invalid).</div>";
        }

        return response()->json([
            'status' => 'success',
            'message' => implode('', $messages),
            'deleted_users' => $deleteUserNo,
            'invalid_users' => $invalidUserNo,
        ]);
    }

}
