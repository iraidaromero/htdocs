<?php

namespace App\Http\Controllers;

use App\Models\Hermandad;
use Illuminate\Http\Request;

class HermandadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hermandades = Hermandad::all();
        return view("prueba", ["hermandades" => $hermandades]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $h = new Hermandad();
        $h->nombre = $request["nombre"]; 
        $h->save();

        return redirect()->route("hermandad_mostrar");

       
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $idHermandad = $request["hermandades"];
        $datosHermandad = Hermandad::where("id", $idHermandad)->first(); 
        return view ('editarHermandad',["hermandad" => $datosHermandad]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $h = Hermandad::where("id", $request["id"]) -> first(); 
        $h->nombre = $request["nombre"]; 
        $h->save();

        return redirect()->route("hermandad_mostrar");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $hermandadABorrar = Hermandad::where("id", $request["hermandades"]) -> first(); 
        $hermandadABorrar->delete(); 

        return redirect()->route("hermandad_mostrar");

        
    }
}
