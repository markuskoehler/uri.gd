<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class RedirectorController extends Controller
{
    public function index(Request $request, $slug) {
        $url = Url::whereSlug($slug)->firstOrFail();

        return view('redirect', [
            'title' => $url->title,
            'link' => $url->link
        ]);
    }

    public function goto(Request $request) {
        return redirect()->route('redirector', ['slug' => $request->input('slug')]);
    }
}
