<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', [Controller::class, 'funtion'])->name('example'); */
/* Route::get('/note/{id}/{title}/{slug}', [NoteController::class, 'index'])->name('note.index'); */
/* Route::get('/note/80', [NoteController::class, 'example'])->name('note.example'); */
Route::get('/note/{id}', [NoteController::class, 'index'])->name('note.index');
