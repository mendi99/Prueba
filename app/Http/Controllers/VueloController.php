<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueloController extends Controller
{
    public function store(Request $request){
        \App\Models\Vuelo::create([
            'nombre' => $request->nombre,
            'origen' => $request->origen,
            'destino' => $request->destino,
        ]);
        return redirect('/vuelo');
    }

    public function index(){
        $allVuelos = \App\Models\Vuelo::all();
        return view('vuelolista', ['vuelos' => $allVuelos]);
    }
}
