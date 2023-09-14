<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required|string'
            ]
        );

        $newStudent = Student::create($data);
        return redirect(route('student.index'));
    }

    public function grades()
    {
        return view('students.grades');
    }
}
