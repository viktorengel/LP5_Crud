<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class NoteController extends Controller
{
    public function index() {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create() {
        return view('note.create');
    }

    public function store(Request $request) {
        
        /*Forma 1 */
        $note = new Note;
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();
        
        // /*Atajo 1*/
        // Note::create([
        //     'title' => $request->title,
        //     'descrition' => $request->description
        // ]);
        
        // /*Atajo 2*/
        // Note::create($request->all());

        return redirect()->route('note.index');
    }
}
