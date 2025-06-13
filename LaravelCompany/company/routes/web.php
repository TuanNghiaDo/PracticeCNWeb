<?php

use Illuminate\Support\Facades\Route;
use App\Models\Department;
use App\Http\Controllers\DepartmentController;

Route::get('/', function () {
    $departments = Department::all();
    return view('departments.index', compact('departments'));
});
Route::resource('departments', DepartmentController::class);
Route::get('departments/{id}/confirm-delete', [DepartmentController::class, 'confirmDelete'])->name('departments.confirmDelete');
