<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controller\StudentsController;
use App\Http\Controller\TeachersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/students', [StudentsController::class, 'index'])->name('students.get');

Route::post('/students', [StudentsController::class, 'create'])->name('students.create');

Route::put('/students', [StudentsController::class, 'update'])->name('students.update');

Route::delete('/students', [StudentsController::class, 'delete'])->name('students.delete');

Route::get('/students/{id}', [StudentsController::class, 'search'])->name('students.search');

Route::get('/teachers', [TeachersController::class, 'index'])->name('teachers.get');

Route::post('/teachers', [TeachersController::class, 'create'])->name('teachers.create');

Route::put('/teachers', [TeachersController::class, 'update'])->name('teachers.update');

Route::delete('/teachers', [TeachersController::class, 'delete'])->name('teachers.delete');

Route::get('/teachers/{id}', [TeachersController::class, 'search'])->name('teachers.search');

