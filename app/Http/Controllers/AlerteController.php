<?php

namespace App\Http\Controllers;

use App\Models\Alerte;
use App\Models\Annuler;
use App\Models\Newcase;
use Illuminate\Http\Request;

class AlerteController extends Controller
{
    //
    public function index(){
        $alertes=Alerte::all();
        return view('alerte.index', compact('alertes'));
    }
    public function create(){
        $newcases=Newcase::all();
        return view('alerte.create',compact('newcases'));
    }
}
