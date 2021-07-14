<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class Agence extends Controller
{
    public function index()
    {
        return view("reporting");
    }


    public function information($id)
    {
        $agence = \App\Models\Agence::find($id);
        return view('unique_agence', ['agence' => $agence]);
    }
    public function getsuccursals(Request $request)
    {
        $Ville = \App\Models\Bpr::find($request->region)->succursals()->get();
        return $Ville;
    }
    public function getagence(Request $request)
    {
        //return $request;
        $agences = \App\Models\Succursal::find($request->ville)->agences()->get();
        return $agences;
    }
}
