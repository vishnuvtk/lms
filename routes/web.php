<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'students/trash/{id}',
    [StudentController::class, 'trash']
) -> name('students.trash');

Route::get(
    'students/trashed',
    [StudentController::class, 'trashed']
) -> name('students.trashed');

Route::get(
    'students/restore/{id}',
    [StudentController::class, 'restore']
) -> name('students.restore')->middleware('auth');


Route::resource('/students', StudentController::class)->middleware('auth');

Route::get(
    'students/destroy/{id}',
    [StudentController::class, 'destroy']
) -> name('students.destroy')->middleware('auth');;

// Courses 

Route::get('courses', function () {
    return view('');
});

Route::get(
    'courses/trash/{id}',
    [CourseController::class, 'trash']
)->name('courses.trash');

Route::get(
    'courses/trashed',
    [CourseController::class, 'trashed']
)->name('courses.trashed');

Route::get(
    'courses/restore/{id}',
    [CourseController::class, 'restore']
)->name('courses.restore');

Route::resource('courses', CourseController::class);

Route::resource('faculties', CourseController::class);

Route::get(
    'courses/destroy/{id}',
    [CourseController::class, 'destroy']
)->name('courses.destroy');