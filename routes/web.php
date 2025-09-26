<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use Phiki\Phast\Root;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('employee', EmployeeController::class);
Route::post('/delete-multiple-employee', [EmployeeController::class, 'destroyMultiRecord'])->name('employee.deleteMultiple');
Route::get('/view-employee/{id}', [EmployeeController::class, 'viewEmployeeData'])->name('employee.viewData');