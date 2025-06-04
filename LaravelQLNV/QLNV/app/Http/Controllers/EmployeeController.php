<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Http\Controllers\RoomController;

class EmployeeController
{
    public function index()
    {
        return view('employees.index', [
            'employees' => Employee::with('room')->get()
        ]);
    }

    public function create()
    {
        $rooms = Room::all();
        return view('employees.create', [
            'rooms' => $rooms
        ]);
    }


    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'birthday' => 'required|date',
            'roomId' => 'required|exists:rooms,id',
        ]);

        // Create a new employee
        Employee::create([
            'name' => $request->name,
            'birthday' => $request->birthday,
            'roomId' => $request->roomId,
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employee = Employee::with('room')->findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    public function edit($id)
    {
        $rooms = Room::all();
        $employee = Employee::findOrFail($id);
        return view('employees.edit', [
            'employee' => $employee,
            'rooms' => $rooms
        ]);
    }


    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        //dd($employee);

        // Validate the request data
        $request->validate([
            'name' => 'required',
            'birthday' => 'required|date',
            'roomId' => 'required|exists:rooms,id',
        ]);

        $employee->update([
            'name' => $request->name,
            'birthday' => $request->birthday,
            'roomId' => $request->roomId,
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
