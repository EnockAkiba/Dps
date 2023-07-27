<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deces;
use App\Models\Epidemie;
use App\Models\Newcase;

class DecesController extends Controller
{
    //
    public function index(){
        $deces=Deces::all();
        return view('deces/index', compact('deces'));
    }
    public function create(){
        $epidemies=Epidemie::all();
        return view('deces/create', compact('epidemies'));
    }

    public function store(Request $request){
        Deces::create([
            'trancheAge'=>$request->trancheAge,
            'epidemie_id'=>$request->epidemie_id
        ]);
        return redirect()->route('deces');
    }

    public function edit(Deces $deces){
        $epidemies=Epidemie::all();
        return view('deces.edit', compact('deces','epidemies'));
    }

    public function update(Request $request, Deces $deces){
        $deces->update([
            'trancheAge'=>$request->trancheAge,
            'epidemie_id'=>$request->epidemie_id
        ]);
        return redirect()->route('deces');
    }

    public function destroy(Deces $deces){
        $deces->delete();
        return redirect()->route('deces');
        Newcase::all();
    }
}
