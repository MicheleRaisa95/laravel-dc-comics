<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(StoreComicRequest $request)
    {
        Comic::create($request->validated());

        return redirect()->route('comics.index');
    }

    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    public function update(UpdateComicRequest $request, $id)
    {
        $comic = Comic::findOrFail($id);
        $comic->update($request->validated());

        return redirect()->route('comics.index');
    }

    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }
}

