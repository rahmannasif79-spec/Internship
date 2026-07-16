<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Welcome to Student Controller";
    }

    public function studentForm()
    {
        return view('student-form');
    }
}