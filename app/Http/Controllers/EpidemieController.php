<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Epidemie;


class EpidemieController extends Controller
{
    //
    public function index(){
        $epidemies=Epidemie::orderBy('description')->paginate(5);
        // dd($epidemies);
        return view('epidemie/index', compact('epidemies'));
    }

    public function create()
    {
        return view('epidemie/create');
    }


    public function store(Request $request){

            Epidemie::create([
            'designation'=> $request->designation,
            'description'=> $request->description
            ]);
 
        
        return redirect()->route('epidemie')->with('success', 'enregistrer');

    }
    public function edit(Epidemie $epidemie){

        return view('epidemie.edit' , compact('epidemie'));
    }

     public function update(Request $request , Epidemie $epidemie){

            $epidemie->update([
            'designation'=> $request->designation,
            'description'=> $request->description
            ]);

        return redirect()->route('epidemie')->with('success', 'modifier');
     }

     public function destroy(Epidemie $epidemie){

        $epidemie->delete();

        return redirect()->route('epidemie')->with('success', 'supprimer');
    }
}
