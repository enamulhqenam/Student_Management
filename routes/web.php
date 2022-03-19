<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/palindrome',[HomeController::class,'palindrome'])->middleware(['auth'])->name('palindrome');
Route::get('/age',[HomeController::class,'age']);

Route::get('/student/create', [StudentController::class,'create']);
Route::get('/student/store', [StudentController::class,'store']);
Route::get('/student/list', [StudentController::class,'index']);
//Operation Action Query
Route::get('/student/edit/{id}', [StudentController::class,'edit']);
Route::get('/student/update', [StudentController::class,'update']);
Route::get('/student/destroy/{id}', [StudentController::class,'destroy']);
Route::get('/student/show/{id}', [StudentController::class,'show']);
Route::get('/student/search', [StudentController::class,'search']);
Route::get('/student/applySearch', [StudentController::class,'applySearch']);

// Route::get('/student/route', function () {
//     return view('student.create');
// });

// test Route

Route::get('/student/normal', function() {
    return view('student.normal');
});


require __DIR__.'/auth.php';
