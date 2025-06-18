<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\DishType;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class DishController extends Controller
{
    public function index()
    {
        $dishes = Dish::all();
        return view('dishes.index', compact('dishes'));
    }

    public function create()
    {
        $dishTypes = DishType::all();
        return view('dishes.create', [
            'dishTypes' => $dishTypes
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'dish_name' => 'required|unique:dishes',
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

    public function show(string $id)
    {
        $room = Dish::findOrFail($id);
        return view('dishes.show', compact('room'));
    }

    public function edit($id)
    {
        $dish = Dish::findOrFail($id);
        $dishTypes = DishType::all();
        return view('dishes.update', [
            'dish' => $dish,
            'dishTypes' => $dishTypes,
        ]);
    }

    public function update(Request $request, $id)
    {
        $dish = Dish::findOrFail($id);
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
        return redirect()->route('dishes.index')->with('success', 'Dish updated successfully.');
    }

    public function destroy(string $id)
    {
        $room = Dish::findOrFail($id);
        $room->delete();
        return redirect()->route('dishes.index')->with('success', 'Dish deleted successfully.');
    }

    public function confirmDelete($id)
    {
        $room = Dish::findOrFail($id);
        return view('dishes.confirm_delete', compact('room'));
    }
}
