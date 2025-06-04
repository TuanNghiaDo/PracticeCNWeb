<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use App\Models\Room;

Route::get('/', function () {
    return view('employees.index', [
        'employees' => Employee::all(),
        'rooms' => Room::all()
    ]);
});

Route::resource('employees', EmployeeController::class);
Route::get('employees/{id}/confirm-delete', [EmployeeController::class, 'confirmDelete'])->name('employees.confirmDelete');
