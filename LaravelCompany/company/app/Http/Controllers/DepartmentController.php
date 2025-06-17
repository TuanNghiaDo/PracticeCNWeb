<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Employee;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::withCount('hasEmployees')->get();
        return view('departments.index', compact('departments'));
    }


    public function create()
    {
        $employees = Employee::all();
        return view('departments.create', [
            'employees' => $employees,
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'DepartmentName' => 'required|string|max:255',
            'DepartmentHeadID' => 'nullable|string',
        ]);

        Department::create([
            'DepartmentName' => $request->DepartmentName,
            'DepartmentHeadID' => $request->DepartmentHeadID,
        ]);

        return redirect()->route('departments.index')->with('success', 'Department created successfully.');
    }


    public function show(Department $department)
    {
        return view('departments.show', compact('department'));
    }


    public function edit(Department $department)
    {
        $employees = Employee::all();
        return view('departments.update', [
            'department' => $department,
            'employees' => $employees,
        ]);
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'DepartmentName' => 'required|string|max:255',
            'DepartmentHeadID' => 'nullable|string',
        ]);

        $department->update([
            'DepartmentName' => $request->DepartmentName,
            'DepartmentHeadID' => $request->DepartmentHeadID,
        ]);

        return redirect()->route('departments.index')->with('success', 'Department updated successfully.');
    }


    public function destroy(Department $department)
    {
        if ($department->hasEmployees()->count() > 0) {
            return redirect()->route('departments.index')->with('error', 'Cannot delete department with employees.');
        }

        $department->delete();
        return redirect()->route('departments.index')->with('success', 'Department deleted successfully.');
    }

    public function confirmDelete($id)
    {
        $department = Department::findOrFail($id);
        return view('departments.confirm_delete', compact('department'));
    }
}
