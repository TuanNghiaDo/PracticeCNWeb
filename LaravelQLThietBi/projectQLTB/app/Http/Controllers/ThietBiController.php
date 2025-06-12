<?php

namespace App\Http\Controllers;

use App\Models\ThietBi;
use Illuminate\Http\Request;

class ThietBiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $thietbis = ThietBi::all();
        return view('thietbis.index', compact('$thietbis'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ThietBi $thietBi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ThietBi $thietBi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ThietBi $thietBi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ThietBi $thietBi)
    {
        //
    }
}
