<?php

namespace App\Http\Controllers;

use App\Models\Vuelos;
use Illuminate\Http\Request;

class VuelosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // Obtener los datos de la base de datos
       $datos = Vuelos::all();
       // Devolver los datos en formato JSON
       return response()->json($datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vuelos $vuelos)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vuelos $vuelos)
    {
        //
    }
}
