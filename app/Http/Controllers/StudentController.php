<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all(); 
        return view('components.student-list', compact('students'));

    }

    public function show($id)
    {
        $student = Student::findOrFail($id); 
        return view('components.student-profile', compact('student'));
    }

    
}
