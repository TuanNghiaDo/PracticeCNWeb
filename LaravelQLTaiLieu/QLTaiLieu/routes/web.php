<?php

use Illuminate\Support\Facades\Route;
use App\Models\Doc;
use App\Http\Controllers\DocController;
use App\Models\DocType;

Route::get('/', function () {
    $docs = Doc::with('doctype')->get();
    return view('docs.index', compact('docs'));
});

Route::resource('docs', DocController::class);

Route::get('docs/{id}/confirm-delete', [DocController::class, 'confirmDelete'])->name('docs.confirmDelete');
