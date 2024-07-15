<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
        ]);

        Comic::create($validated);

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

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
        ]);

        $comic = Comic::findOrFail($id);
        $comic->update($validated);

        return redirect()->route('comics.index');
    }

   public function destroy($id)
{
    $comic = Comic::findOrFail($id);
    $comic->delete();

    return redirect()->route('comics.index');
}

}
