<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\MedicineType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicines = Medicine::all();
        return view('medicines.index', compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicineTypes = MedicineType::all();
        return view('medicines.create', compact('medicineTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'medicine_name' => 'required|unique:medicines,medicine_name',
            'type_id' => 'required|exists:medicine_types,type_id',
            'medicinal_group' => 'required',
            'des' => 'required',
            'product_date' => 'required|date',
            'expiry_date' => 'required|date|after:product_date',
        ]);
        Medicine::create([
            'medicine_name' => $request->medicine_name,
            'type_id' => $request->type_id,
            'medicinal_group' => $request->medicinal_group,
            'des' => $request->des,
            'product_date' => $request->product_date,
            'expiry_date' => $request->expiry_date,
        ]);
        return redirect()->route('medicines.index')->with('success', 'Medicine created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        return view('medicines.show', compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicine $medicine)
    {
        $medicineTypes = MedicineType::all();
        return view('medicines.update', compact('medicine', 'medicineTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicine $medicine)
    {
        $request->validate([
            'medicine_name' => ['required', Rule::unique('medicines')->ignore($medicine->medicine_id, 'medicine_id')],
            'type_id' => 'required|exists:medicine_types,type_id',
            'medicinal_group' => 'required',
            'des' => 'required',
            'product_date' => 'required|date',
            'expiry_date' => 'required|date|after:product_date',
        ]);
        $medicine->update([
            'medicine_name' => $request->medicine_name,
            'type_id' => $request->type_id,
            'medicinal_group' => $request->medicinal_group,
            'des' => $request->des,
            'product_date' => $request->product_date,
            'expiry_date' => $request->expiry_date,
        ]);
        return redirect()->route('medicines.index')->with('success', 'Medicine created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicine $medicine)
    {
        $medicine->delete();
        return redirect()->route('medicines.index')->with('success', 'Medicine deleted successfully.');
    }

    public function confirmDelete($id)
    {
        $medicine = Medicine::findOrFail($id);
        return view('medicines.confirm_delete', compact('medicine'));
    }
}
