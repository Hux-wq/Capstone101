<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentReportController extends Controller
{
    public function index()
    {
        return view('components.student-report');
    }
}
