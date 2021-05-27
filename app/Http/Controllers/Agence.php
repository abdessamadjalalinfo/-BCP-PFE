<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class Agence extends Controller
{
    public function index()
    {
        return view("reporting");
    }
    public function getville(Request $request)
    {
        //return $request;
        $Ville = \App\Models\Agence::where('region', '=', $request->region)->distinct()->get(['ville']);
        return $Ville;
    }
    public function getagence(Request $request)
    {
        //return $request;
        $agence = \App\Models\Agence::where('ville', '=', $request->ville)->distinct()->get(['nom', 'id']);
        return $agence;
    }
}
