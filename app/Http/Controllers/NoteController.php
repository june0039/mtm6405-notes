<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $title = "Notes";
        $search = request('search');

        if ($search) {
            $notes = Note::where('title', 'like', "%{$search}%")
                ->orWhere('text', 'like', "%{$search}%")
                ->get();
        } else {
            $notes = Note::all();
        }

        return view('notes', ['title' => $title, 'notes' => $notes]);
    }

    public function show($id)
    {
        $note = Note::find($id);
        return view('note', $note);
    }

    public function create()
    {
        //display the create form
        return view('create', ['title' => 'Add Note']);
    }

    public function store()
    {
        $note = new Note();
        $note->title = request('title'); //$_POST
        $note->text = request('text');
        //store to database
        $note->save();

        //redirect the user to created a note page
        return redirect("/notes/{$note->id}");

    }
}
