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
        /*$year = ['2015', '2016', '2017', '2018', '2019', '2020', '2021'];
        $user = [];
        foreach ($year as $key => $value) {
            $user[] = \App\Models\User::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"), $value)->count();
        }*/

        $agence = \App\Models\Agence::find($id);

        return view('unique_agence', ['agence' => $agence]);
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
