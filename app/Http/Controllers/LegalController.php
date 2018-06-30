<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function legal_notice(Request $request) {
        return view('legal.legal-notice');
    }

    public function privacy_policy(Request $request) {
        return view('legal.privacy-policy');
    }
}
