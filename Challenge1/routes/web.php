<?php

use Illuminate\Support\Facades\Route;
// routes/web.php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;

Route::get('/', [AttendanceController::class, 'index'])->name('attendance.index');
Route::post('/attendance/upload-excel', [AttendanceController::class, 'uploadExcel']);
Route::get('/attendance/employee/{employeeId}', [AttendanceController::class, 'getEmployeeAttendance'])->name('ge');

Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');

Route::get('/attendance/mark', [AttendanceController::class, 'markAttendance'])->name('attendance.mark');
Route::post('/attendance/mark', [AttendanceController::class, 'storeAttendance'])->name('attendance.store');
Route::get('employee', [EmployeeController::class, 'employee'])->name('employee');
