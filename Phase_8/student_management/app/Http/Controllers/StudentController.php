<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Show Student List
    public function index()
{
    $students = Student::paginate(5);

    return view('students.index', compact('students'));
}

    // Show Create Form
    public function create()
    {
        return view('students.create');
    }

    // Store Student
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'department' => 'required',
            'status' => 'required',
        ]);

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'department' => $request->department,
            'status' => $request->status,
        ]);

        return redirect('/students')
            ->with('success', 'Student created successfully!');
    }

    // Show Edit Form
    public function edit($id)
    {
        $student = Student::find($id);

        return view('students.edit', compact('student'));
    }

    // Update Student
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'department' => 'required',
            'status' => 'required',
        ]);

        $student = Student::find($id);

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'department' => $request->department,
            'status' => $request->status,
        ]);

        return redirect('/students')
            ->with('success', 'Student updated successfully!');
    }

    // Delete Student
    public function destroy($id)
    {
        $student = Student::find($id);

        $student->delete();

        return redirect('/students')
            ->with('success', 'Student deleted successfully!');
    }

    // Search Student
    public function search(Request $request)
    {
$students = Student::where('name', 'like', '%' . $request->search . '%')
    ->paginate(5);
        return view('students.index', compact('students'));
    }
}