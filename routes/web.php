<?php

use App\Models\Hermandad;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\HermandadController;
use App\Http\Controllers\Hermandad_BandaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/mesa", [CentroController::class, "index"])->name("datos");

Route::get("/bandas", [Hermandad_BandaController::class, "bandasPorHermandad"]);
Route::get("/prueba", [HermandadController::class, "index"]);

Route::post("/hermandad", [HermandadController::class, "create"])->name("hermandad_crear");
Route::put("/hermandad", [HermandadController::class, "edit"])->name("hermandad_editar");
Route::put("/hermandad/actualizar", [HermandadController::class, "update"])->name("hermandad_actualizar");
Route::delete("/hermandad", [HermandadController::class, "destroy"])->name("hermandad_borrar");
Route::get("/hermandad", [HermandadController::class, "index"])->name("hermandad_mostrar");

