<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function create()
    {
        return view('pages.contact');
    }

    public function store()
    {
    }
}
