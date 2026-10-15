<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function tentangKami()
    {
        return view('tentang-kami');
    }

    public function harga()
    {
        return view('harga');
    }
}
