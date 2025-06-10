<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedecineController;
use App\Models\MedecineType;
use App\Models\Medecine;

Route::get('/', function () {
    $medecines = Medecine::all();
    return view('medecines.index', compact('medecines'));
});

Route::resource('medecines', MedecineController::class);
