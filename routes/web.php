<?php

use Illuminate\Support\Facades\Route;
use App\Models\Note;

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

Route::get(
    '/', function () {
        $title = "Notes";
        $notes = Note::all();

        return view('notes', ['title' => $title, 'notes' => $notes]);
    }
);

Route::get(
    '/notes/{note}', function ($id) {
        $title = "Note {$id}";
        $text = "This is note {$id}";
        return view('note', ['title' => $title, 'text' => $text]);
    }
);
