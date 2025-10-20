<?php

namespace App\Http\Controllers;

use App\Models\Hermandad_banda;
use Illuminate\Http\Request;

class Hermandad_BandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function bandasPorHermandad(Request $request)
    {
        $id_hermandad = $request["hermandades"];
        $bandas = Hermandad_banda::where("id_hermandad", $id_hermandad)->get();
        return view("gestion", ["bandas" => $bandas]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
