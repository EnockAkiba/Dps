<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newcase;
use App\Models\Epidemie;

class NewCaseController extends Controller
{
    //
    public function index(){
        $newCases=Newcase::all();
        return view('newCase.index', compact('newCases'));
    }
    public function create(){
        $epidemies=Epidemie::all();
        return view('newCase.create', compact('epidemies'));
    }
}
