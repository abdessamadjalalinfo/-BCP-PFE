<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Client extends Controller
{
    //
    public function index()
    {
        return view('clients');
    }
    public function creation()
    {
        return view('creation');
    }
    public function modification()
    {
        return view('modification');
    }

    public function modification_client()
    {
        return view('modification-client');
    }
}
