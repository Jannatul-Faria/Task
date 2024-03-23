<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::get();
        return view('note.dashboard', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('note.Pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Note::create([
            'title'=>$request->title,
            'content'=>$request->content,
        ]);
       
        
        return redirect()->route('note.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
       return view('note.pages.view', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        // $note = Note::find($note);
        return view('note.pages.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $note->update($request->all());
        return redirect()->route('note.index');
    }

   
    public function destroy(Note $note)
    {
         $note->delete();
         return redirect()->route('note.index');
    }
    
     public function search(Request $request)
    {
        
        $search = $request->get('search');
        $notes = Note::where('title', 'like', '%'.$search.'%')
            ->orWhere('content', 'like', '%'.$search.'%')
            ->paginate(10);
        return view('note.Pages.search', compact('notes'));
    }
}