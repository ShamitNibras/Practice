<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myworldcontroller;
use App\Http\Controllers\StudentController;

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

//Basic Routes
Route::get('/myworld', [ myworldcontroller::class, 'index' ]) ;
Route::get('/profile', [ myworldcontroller::class, 'profile' ]) ;

//Student Routes

Route::get('/studentList', [StudentController::class, 'studentList'])->name('studentList');
Route::get('/studentEdit/{id}/{name}',[StudentController::class,'studentEdit'])->name('studentEdit');

Route::get('/studentCreate', [StudentController::class, 'studentCreate'])->name('studentCreate');
Route::post('/studentCreate', [StudentController::class, 'studentCreatesubmitted'])->name('studentCreate');
