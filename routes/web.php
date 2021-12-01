<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SubjectController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('books', BookController::class);
Route::resource('categories', CategoryController::class);
Route::resource('exams', ExamController::class);
Route::resource('grades', GradeController::class);
Route::resource('information', InformationController::class);
Route::resource('libraries', LibraryController::class);
// Route::resource('payments', PaymentController::class);
// Route::resource('schedules', ScheduleController::class);
// Route::resource('subjects', SubjectController::class);