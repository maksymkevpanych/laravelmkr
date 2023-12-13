<?php

use Illuminate\Support\Facades\Route;
use App\Models\Grade;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students/{id}', function ($id) {
    // TODO:  load grades
    $grades = Grade::where('student_id', $id)->;
    dd($grades);
    return view('students.grades', ['grades' => $grades]);
});