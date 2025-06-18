<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;
use App\Models\Dish;

Route::get('/', function () {
    return view('dishes.index', [
        'dishes' => Dish::all()
    ]);
});
Route::resource('dishes', DishController::class);
Route::get('dishes/{id}/confirm-delete', [DishController::class, 'confirmDelete'])->name('dishes.confirmDelete');
