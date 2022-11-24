<?php

use Illuminate\Support\Facades\Route;
use App\Models\Note;
use App\Http\Controllers\NoteController;

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

Route::get('/', [NoteController::class, 'index']);
Route::post('/', [NoteController::class, 'store']);
Route::get('/create', [NoteController::class, 'create']);
Route::get('/notes/{note}', [NoteController::class, 'show']);
Route::put('/notes/{note}', [NoteController::class, 'update']);
Route::get('/notes/{note}/edit', [NoteController::class, 'edit']);
