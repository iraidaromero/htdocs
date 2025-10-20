<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hermandad_banda extends Model
{
    protected $table = "hermandades_bandas";
    protected $primaryKey = "id";
    protected $fillable = [
        "id_hermandad",
        "id_banda"
    ];

    function banda() {
        return $this->belongsTo(Banda::class, "id_banda", "id");
    }

    function hermandad() {
        return $this->belongsTo(Hermandad::class, "id_hermandad", "id");
    }
}
