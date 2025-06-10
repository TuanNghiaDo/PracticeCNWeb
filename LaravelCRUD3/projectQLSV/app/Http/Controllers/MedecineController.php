<?php

namespace App\Http\Controllers;

use App\Models\Medecine;
use Illuminate\Http\Request;
use App\Models\MedecineType;

class MedecineController extends Controller
{
    public function index()
    {
        return view('medecines.index', ['medecines' => Medecine::paginate(10)]);
    }

    public function create()
    {
        $medecineTypes = MedecineType::all();
        return view('medecines.create', compact('medecineTypes'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'medecine_name' => 'required',
            'product_date' => 'required|date',
            'out_of_date' => 'required|date',
            'des' => 'required',
            'nhom_duoc_tinh' => 'required',
            'medecine_type_id' => 'required',

        ]);

        Medecine::create([
            'medecine_name' => $request->medecine_name,
            'product_date' => $request->product_date,
            'out_of_date' => $request->out_of_date,
            'des' => $request->des,
            'nhom_duoc_tinh' => $request->nhom_duoc_tinh,
            'medecine_type_id' => $request->medecine_type_id,
        ]);

        return redirect()->route('medecines.index')->with('success', 'medecine created successfully.');
    }


    public function show(Medecine $medecine)
    {
        return view('medecines.show', compact('medecine'));
    }


    public function edit(Medecine $medecine)
    {
        return view('medecines.edit', [
            'medecine' => $medecine,
            'medecineTypes' => MedecineType::all()
        ]);
    }


    public function update(Request $request, Medecine $medecine)
    {
        $request->validate([
            'medecine_name' => 'required',
            'product_date' => 'required|date',
            'out_of_date' => 'required|date',
            'des' => 'required',
            'nhom_duoc_tinh' => 'required',
            'medecine_type_id' => 'required',

        ]);

        $medecine->update([
            'medecine_name' => $request->medecine_name,
            'product_date' => $request->product_date,
            'out_of_date' => $request->out_of_date,
            'medecine_type_id' => $request->medecine_type_id,
            'des' => $request->des,
            'nhom_duoc_tinh' => $request->nhom_duoc_tinh,

        ]);

        return redirect()->route('medecines.index')->with('success', 'Medecine updated successfully.');
    }


    public function destroy(Medecine $medecine)
    {
        $medecine->delete();
        return redirect()->route('medecines.index')->with('success', 'Medecine deleted successfully.');
    }
}
