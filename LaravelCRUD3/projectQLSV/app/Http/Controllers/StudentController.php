<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\ClassRoom;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function index()
    {
        return view('students.index', ['students' => Student::paginate(10)]);
    }

    public function create()
    {
        $classrooms = ClassRoom::all();
        return view('students.create', compact('classrooms'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'StudentName' => 'required',
            'StudentEmail' => 'required|email',
        ]);

        Student::create([
            'StudentName' => $request->StudentName,
            'StudentEmail' => $request->StudentEmail,
            'StudentGender' => $request->StudentGender,
            'ClassroomID' => $request->ClassRoomID,
        ]);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }


    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }


    public function edit(Student $student)
    {
        return view('students.edit', [
            'student' => $student,
            'classrooms' => ClassRoom::all()
        ]);
    }


    public function update(Request $request, Student $student)
    {
        $request->validate([
            'StudentName' => 'required',
            'StudentEmail' => 'required|email',
        ]);

        $student->update([
            'StudentName' => $request->StudentName,
            'StudentEmail' => $request->StudentEmail,
            'StudentGender' => $request->StudentGender,
            'ClassroomID' => $request->ClassRoomID,
        ]);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }


    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
