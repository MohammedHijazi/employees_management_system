<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\AcademicDegreesController;
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

Route::get('/',[EmployeesController::class,'index']);

Route::resource('employees','EmployeesController');

Route::resource('degrees','AcademicDegreesController');

Route::resource('courses','CoursesController');

Route::resource('expertises','ExpertisesController');

Route::resource('families','FamilyController');

