<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    // Mostra l'elenco dei fumetti.
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    // Mostra il form per creare un nuovo fumetto.
    public function create()
    {
        return view('comics.create');
    }

    // Salva un nuovo fumetto nel database.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
        ]);

        Comic::create($request->all());

        return redirect()->route('comics.index')
                         ->with('success', 'Fumetto creato con successo.');
    }

    // Mostra un fumetto specifico.
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }
}