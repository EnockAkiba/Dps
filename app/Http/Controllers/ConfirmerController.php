<?php

namespace App\Http\Controllers;

use App\Models\Alerte;
use App\Models\Confirmer;
use App\Models\Epidemie;
use Illuminate\Http\Request;

class ConfirmerController extends Controller
{
    //
    public function index(){
        $confirmers=Confirmer::all();
        return view('confirmer.index', compact('confirmers'));
    }
    public function create(){ 
        $alertes=Alerte::get();
        // dd($alertes->newcase->trancheAge);
        return view('confirmer.create', compact('alertes'));
    }
}
