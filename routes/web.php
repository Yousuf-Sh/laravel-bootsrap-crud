<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class,'index'])->name('students.index');
Route::view('/students/create', 'create')->name('students.create');
