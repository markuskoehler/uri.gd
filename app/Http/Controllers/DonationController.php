<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function cancel(Request $request)
    {
        return view('donate.cancel');
    }

    public function success(Request $request)
    {
        return view('donate.success');
    }
}
