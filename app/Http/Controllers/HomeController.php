<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('home')->with('user', Auth::user());
    }
}
