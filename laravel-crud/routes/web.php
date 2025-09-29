<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use Phiki\Phast\Root;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "All caches cleared!";
});

Route::get('/', function () {
    return redirect()->route('employee.index');
});



Route::resource('employee', EmployeeController::class);
Route::post('/delete-multiple-employee', [EmployeeController::class, 'destroyMultiRecord'])->name('employee.deleteMultiple');
Route::get('/view-employee/{id}', [EmployeeController::class, 'viewEmployeeData'])->name('employee.viewData');