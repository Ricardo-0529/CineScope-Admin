<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::latest()->get();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'year' => 'required|integer|min:1888|max:2100',
            'cover' => 'nullable|url|max:2048',
            'genre' => 'nullable|string|max:100',
        ]);

        Movie::create($data);

        return redirect()->route('movies.index')
            ->with('success', 'Película agregada correctamente.');
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'year' => 'required|integer|min:1888|max:2100',
            'cover' => 'nullable|url|max:2048',
            'genre' => 'nullable|string|max:100',
        ]);

        $movie->update($data);

        return redirect()->route('movies.index')
            ->with('success', 'Película actualizada correctamente.');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index')
            ->with('success', 'Película eliminada correctamente.');
    }
}
