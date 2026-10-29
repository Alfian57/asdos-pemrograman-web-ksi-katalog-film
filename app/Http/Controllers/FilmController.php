<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Support\Facades\Auth;

class FilmController extends Controller
{
    public function index()
    {
        return view('films', [
            'filmList' => Film::where('user_id', Auth::user()->id)->get(),
        ]);
    }

    public function show(string $id)
    {
        return 'Detail film '.$id;
    }
}
