<?php

namespace App\Http\Controllers;

use App\Models\Annulercas;
use App\Models\Newcase;
use Illuminate\Http\Request;

class AnnulerCasController extends Controller
{
    //
    public function index(){
        $annulers=Annulercas::all();
        return view('annulerCas.index', compact('annulers'));
    }

    public function create()
    {
        $newcases=Newcase::all();
        return view('annulerCas/create', compact('newcases'));
    }

}
