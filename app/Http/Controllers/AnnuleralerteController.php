<?php

namespace App\Http\Controllers;

use App\Models\Alerte;
use App\Models\Annuler;
use Illuminate\Http\Request;

class AnnuleralerteController extends Controller
{
    //
       public function index(){
        $annulers=Annuler::all();
        return view('annuler.index', compact('annulers'));
    }

    public function create(){ 
        $alertes=Alerte::get();
        // dd($alertes->newcase->trancheAge);
        return view('annuler.create', compact('alertes'));
    }
}
