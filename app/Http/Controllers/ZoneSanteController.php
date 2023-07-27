<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZoneSante;

class ZoneSanteController extends Controller
{
    //
    public function index(){
        $zoneSantes =ZoneSante::all();
        return view('zoneSante.index', compact('zoneSantes'));
    }

    public function create()
    {
        return view('zoneSante/create');
    }

    public function store(Request $request){
        ZoneSante::create([
            'designation'=>$request->designation,
            'adresse'=>$request->adresse
        ]);
        dd("bien !");
    }

    public function edit(ZoneSante $zoneSante){

        return view('zoneSante.edit' , compact('zoneSante'));
    }

    public function update(Request $request , ZoneSante $zoneSante){

        $zoneSante->update([
        'designation'=> $request->designation,
        'adresse'=> $request->adresse
        ]);

    return redirect()->route('zoneSante')->with('success', 'modifier');
 }

    public function destroy(ZoneSante $zoneSante){

        $zoneSante->delete();

        return redirect()->route('zoneSante')->with('success', 'supprimer');
    }
}
