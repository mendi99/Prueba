<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasajeroController extends Controller
{
    public function store(Request $request){
        \App\Models\Pasajero::create([
            'nombre' => $request->nombre,
            'dni' => $request->dni,
            'edad' => $request->edad,
        ]);
        return redirect('/pasajero');
    }

    public function index(){
        $allPasajeros = \App\Models\Pasajero::all();
        return view('pasajerolista', ['pasajeros' => $allPasajeros]);
    }

    public function lista(){
        $allPasajeros = \App\Models\Pasajero::all();
        $allVuelos = \App\Models\Vuelo::all();
        return view('vuelopasajero', ['pasajeros' => $allPasajeros, 'vuelos' => $allVuelos]);
    }

    public function relation(Request $request){
        $vuelo = \App\Models\Vuelo::find($request->vuelo);
        $numRes = $request->reservas;
        $vuelo->pasajero()->attach($request->pasajero, ['num_res' => $numRes]);
        return redirect('/lista');
    }

    public function destroyRel($pasaId, $vueloId){
        $pasajero = \App\Models\Pasajero::find($pasaId);
        $pasajero->vuelo()->detach($vueloId);
        return redirect('/lista');
    }
}
