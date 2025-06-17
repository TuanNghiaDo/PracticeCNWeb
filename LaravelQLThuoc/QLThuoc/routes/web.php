<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Models\Medicine;

Route::get('/', function () {
    return view('medicines.index', [
        'medicines' => Medicine::all()
    ]);
});
Route::resource('medicines', MedicineController::class);
Route::get('medicines/{id}/confirm-delete', [MedicineController::class, 'confirmDelete'])->name('medicines.confirmDelete');
