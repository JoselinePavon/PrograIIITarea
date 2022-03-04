<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});
//Read Student
Route::get('/', [StudentController::class, 'studentread']);
//Formulario Creat Student
Route::get('/Student/Create', [StudentController::class, 'studentform']);
//Save Student
Route::post('/Student/Save', [StudentController::class, 'save'])->name('save');

