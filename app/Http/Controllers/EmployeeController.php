<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use APP\Http\Helpers\helpers;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employeeData=Employee::orderby('id','desc')->paginate(5); 
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

    public function destroyMultiRecord()
    {
        if(isset($_POST['deleteID']))
        {
            $deleteIDEncrypt = json_decode($_POST['deleteID'], true);

            if(empty($deleteIDEncrypt) || !is_array($deleteIDEncrypt))
            {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Please select at least one employee to delete.',
                ]);
            }

            $deleteIDDecrypt = [];
            $invalidUserNo = [];
            $deleteUserNo=[];

            foreach ($deleteIDEncrypt as $key => $value) 
            {
                try 
                {
                    $id = secure_decrypt($value);
                    if ($id == null || !is_numeric($id)) 
                    {
                        $invalidUserNo[] = $key+1;
                        continue;
                    }

                    $employeeExists=Employee::find($id);
                    if(!$employeeExists)
                    {
                        $invalidUserNo[] = $key+1;
                        continue;
                    }

                    $deleteIDDecrypt[] = $id;
                    $deleteUserNo[] = $key + 1;
                 }
                catch (\Exception $e)
                {
                    $invalidUserNo[] = $key+1;
                }
            }
            
         
            if (!empty($deleteIDDecrypt)) {
                Employee::whereIn('id', $deleteIDDecrypt)->delete();
            }

            // ✅ Build Response Message
            $messageParts = [];

           

            if (!empty($deleteUserNo) && is_array($deleteIDDecrypt)) 
            {
                if(count($deleteUserNo)===1 && count($invalidUserNo)===0)
                {
                    $messageParts[] = "<span style='color:green'>Employee Deleted successfully.</span>";
                }
                else
                {
                     $messageParts[] = "<span style='color:green'>Employee # " .implode(', ', $deleteUserNo) . " deleted successfully.</span>";
                }
            }

            if (!empty($invalidUserNo)) 
            {
                if(count($invalidUserNo)===1 && count($deleteUserNo)===0)
                {
                    $messageParts[]= "<span style='color:red'>Employee could not be deleted (invalid).</span>";
                }
                else
                {
                    $messageParts[]= "<br><span style='color:red'>Employee # " .implode(', ', $invalidUserNo) ." could not be deleted (invalid).</span>";
                }
                
            }

            return response()->json([
                'status' => 'success',
                'message' => implode(' ', $messageParts),
                'deleted_users' => $deleteUserNo,
                'invalid_users' => $invalidUserNo,
            ]);
            
        }

        return response()->json([
          'status' => 'error',
          'message' => 'Request missing deleteID parameter.'
        ], 400);
        
    }
}
