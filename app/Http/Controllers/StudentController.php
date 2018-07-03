<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller {

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $students = \App\Student::get();        
        
        return view('students.lista', ['students' => $students]);
    }
}
