<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function legalNotice(Request $request) {
        return view('legal.legal-notice');
    }

    public function disclaimer(Request $request) {
        return view('legal.disclaimer');
    }

    public function privacyPolicy(Request $request) {
        return view('legal.privacy-policy');
    }
}
