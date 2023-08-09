<?php

namespace App\Http\Controllers;

use App\Models\Vuelos;
use Illuminate\Http\Request;

class VuelosController extends Controller
{

    public function index()
    {
       // Obtener los datos de la base de datos
       $datos = Vuelos::all();
       // Devolver los datos en formato JSON
       return response()->json($datos);
    }


    public function create()
    {
        return "hola";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vuelo = new Vuelos();

        $vuelo -> ciudad_partida = $request -> ciudad_partida;
        $vuelo -> ciudad_destino = $request -> ciudad_destino;
        $vuelo -> fecha = $request -> fecha;
        $vuelo -> capacidad_pasajeros = $request -> capacidad_pasajeros;
        $vuelo -> cupos_disponibles = $request -> cupos_disponibles;
        $vuelo -> picture = $request -> picture;

        $vuelo -> save();
    }


    public function show(Vuelos $vuelo)
    {
        return Vuelos::find($vuelo) ->first();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vuelos $vuelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vuelos $vuelo)
    {
        $vuelo -> ciudad_partida = $request -> ciudad_partida;
        $vuelo -> ciudad_destino = $request -> ciudad_destino;
        $vuelo -> fecha = $request -> fecha;
        $vuelo -> capacidad_pasajeros = $request -> capacidad_pasajeros;
        $vuelo -> cupos_disponibles = $request -> cupos_disponibles;
        $vuelo -> picture = $request -> picture;

        $vuelo -> save();
    }

    public function destroy(Vuelos $vuelo)
    {
        $vuelos = Vuelos::find($vuelo) ->first();
        $vuelos -> delete();
    }
}
