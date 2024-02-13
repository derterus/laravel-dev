<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('student', Student::class);
