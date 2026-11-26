<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        return view('films.index', [
            'filmList' => Film::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('films.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => ['required', 'max:255'],
            'deskripsi' => ['required', 'max:255'],
        ]);

        Film::create($data);

        return redirect()->route('films');
    }

    public function show(Film $film)
    {
        return 'Detail film '.$film->id;
    }

    public function edit(Film $film)
    {
        return view('films.edit', [
            'film' => $film,
        ]);
    }

    public function update(Request $request, Film $film)
    {
        $data = $request->validate([
            'judul' => ['required', 'max:255'],
            'deskripsi' => ['required', 'max:255'],
        ]);

        $film->update($data);

        return redirect()->route('films');
    }

    public function destroy(Film $film)
    {
        $film->delete();

        return redirect()->route('films');
    }
}
