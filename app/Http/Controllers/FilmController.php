<?php

namespace App\Http\Controllers;

class FilmController extends Controller
{
    public function index()
    {
        return view('films', [
            'filmTersedia' => true,
            'filmList' => ['Laskar Pelangi', '5 sentimeter', 'Avenger Doomsday'],
        ]);
    }

    public function show(string $id)
    {
        return 'Detail film '.$id;
    }
}
