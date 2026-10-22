<?php

namespace App\Http\Controllers;

use App\Models\Film;

class FilmController extends Controller
{
    public function index()
    {
        return view('films', [
            'filmList' => Film::all(),
        ]);
    }

    public function show(string $id)
    {
        return 'Detail film '.$id;
    }
}
