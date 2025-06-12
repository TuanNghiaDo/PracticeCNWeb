<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();

        return view('rooms.index', compact('rooms'));
    }


    public function create()
    {
        $roomAvailability = ['available', 'occupied', 'under maintenance'];
        $roomTypes = ['standard', 'deluxe', 'suite'];
        return view('rooms.create', [
            'roomAvailability' => $roomAvailability,
            'roomTypes' => $roomTypes
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'RoomNumber' => 'required|unique:rooms,RoomNumber|integer|min:100|max:999',
            'RoomType' => 'required|in:standard,deluxe,suite',
            'Availability' => 'required|in:available,occupied,under maintenance',
        ]);

        Room::create([
            'RoomNumber' => $request->RoomNumber,
            'RoomType' => $request->RoomType,
            'Availability' => $request->Availability,
        ]);

        return redirect()->route('rooms.index')->with('success', 'Room created successfully.');
    }


    public function show(string $id)
    {
        $room = Room::findOrFail($id);
        return view('rooms.show', compact('room'));
    }


    public function edit(string $id)
    {
        $room = Room::findOrFail($id);
        $roomAvailability = ['available', 'occupied', 'under maintenance'];
        $roomTypes = ['standard', 'deluxe', 'suite'];
        return view('rooms.update', compact('room', 'roomAvailability', 'roomTypes'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'RoomNumber' => 'required|integer|min:100|max:999|unique:rooms,RoomNumber',
            'RoomType' => 'required|in:standard,deluxe,suite',
            'Availability' => 'required|in:available,occupied,under maintenance',
        ]);

        $room = Room::findOrFail($id);
        $room->update([
            'RoomNumber' => $request->RoomNumber,
            'RoomType' => $request->RoomType,
            'Availability' => $request->Availability,
        ]);

        return redirect()->route('rooms.index')->with('success', 'Room updated successfully.');
    }


    public function destroy(string $id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
    }

    public function confirmDelete($id)
    {
        $room = Room::findOrFail($id);
        return view('rooms.confirm_delete', compact('room'));
    }
}
