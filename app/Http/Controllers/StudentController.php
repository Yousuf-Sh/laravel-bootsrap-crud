<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Console\View\Components\Task;

class StudentController extends Controller
{
public function index(Student $students){
    return view('index',[
        'students'=> $students::latest()->get()
    ]);
}
}
