<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CentreSante;
use App\Models\ZoneSante;


class CentreSanteController extends Controller
{
    //
    public function index(){
        $centreSantes= CentreSante::get();
        return view('centreSante.index', compact('centreSantes'));
    }

    public function create(){
        $zoneSantes=ZoneSante::all();
        return view('centreSante.create', compact("zoneSantes"));
    }

    public function store(Request $request){
        CentreSante::create([
            'zone_santes_id'=>$request->zone_santes_id,
            'designation'=>$request->designation,
            'adresse'=>$request->adresse
        ]);
        dd("cool");
    }
    public function edit(CentreSante $centreSante){
        $zoneSantes= ZoneSante::all();
        return view('centreSante.edit', compact('centreSante','zoneSantes'));
    }

    public function update(Request $request, CentreSante $centreSante){
        $centreSante->update([
            'zone_santes_id'=>$request->zone_santes_id,
            'designation'=>$request->designation,
            'adresse'=>$request->adresse
        ]);
        return redirect()->route('centreSante');
    }

    public function destroy(CentreSante $centreSante){
        CentreSante::delete();
        return redirect()->route('centreSante');
    }
}
