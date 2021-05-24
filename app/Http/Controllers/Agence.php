<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Agence extends Controller
{
    public function index()
    {
        return view("reporting");
    }
}
