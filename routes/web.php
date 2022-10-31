<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});

//Admin Route:
Route::get('/admin/dashboard', function () {
    return view('partial.admin.dashboard');
});
Route::get('/admin/user', function () {
    return view('partial.admin.user');
});
Route::get('/admin/teacher', function () {
    return view('partial.admin.teacher');
});
Route::get('/admin/students', function () {
    return view('partial.admin.students');
});
Route::get('/admin/score', function () {
    return view('partial.admin.score');
});

//Teacher Route:
Route::get('/teacher/dashboard', function () {
    return view('partial.teacher.dashboard');
});

Route::get('/teacher/students', function () {
    return view('partial.teacher.students');
});

Route::get('/teacher/grading', function () {
    return view('partial.teacher.grading');
});

Route::get('/teacher/score', function () {
    return view('partial.teacher.score');
});

//Student Route:
Route::get('/student/subject', function () {
    return view('partial.student.subject');
});
Route::get('/student/score', function () {
    return view('partial.student.score');
});
