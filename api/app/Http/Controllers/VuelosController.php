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
        return $request ->all();
    }


    public function show(Vuelos $vuelos)
    {
        return $vuelos;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vuelos $vuelos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vuelos $vuelos)
    {
        //
    }

    public function destroy(Vuelos $vuelos)
    {
        return "borro";
    }
}
