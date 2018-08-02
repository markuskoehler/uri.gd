<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function uriGd(Request $request)
    {
        return view('about.uri-gd');
    }

    public function markusKoehler(Request $request)
    {
        return view('about.markus-koehler');
    }

    public function markusKoehlerItServices(Request $request)
    {
        return view('about.markus-koehler-it-services');
    }
}
