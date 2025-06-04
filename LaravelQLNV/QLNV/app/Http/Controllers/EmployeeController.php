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
            'employees' => Employee::all(),
            'rooms' => Room::all()
        ]);
    }

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
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
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
        dd($request->all());

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
    public function destroy(Employee $employee)
    {
        //
    }
}
