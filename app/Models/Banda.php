<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banda extends Model
{
    protected $table = "bandas";
    protected $primaryKey = "id";
    protected $fillable = [
        "nombre"
    ];

    function hermandad() {
        $this->hasMany(Hermandad::class, "id_banda", "id");
    }
}
