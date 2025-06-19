<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\DishType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dish::all();
        return view('dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dishTypes = DishType::all();
        return view('dishes.create', compact('dishTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'dish_name' => 'required|unique:dishes,dish_name',
            'type_id' => 'required|exists:dish_types,type_id',
            'des' => 'required',
        ]);
        Dish::create([
            'dish_name' => $request->dish_name,
            'type_id' => $request->type_id,
            'des' => $request->des,
        ]);
        return redirect()->route('dishes.index')->with('success', 'Dish created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        return view('dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {
        $dishTypes = DishType::all();
        return view('dishes.update', compact('dish', 'dishTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        $request->validate([
            'dish_name' => ['required', Rule::unique('dishes')->ignore($dish->dish_id, 'dish_id')],
            'type_id' => 'required|exists:dish_types,type_id',
            'des' => 'required',
        ]);
        $dish->update([
            'dish_name' => $request->dish_name,
            'type_id' => $request->type_id,
            'des' => $request->des,
        ]);
        return redirect()->route('dishes.index')->with('success', 'Dish created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();
        return redirect()->route('dishes.index')->with('success', 'Dish deleted successfully.');
    }

    public function confirmDelete($id)
    {
        $dish = Dish::findOrFail($id);
        return view('dishes.confirm_delete', compact('dish'));
    }
}
