<?php

namespace App\Models;

use App\Models\Banda;
use Illuminate\Database\Eloquent\Model;

class Hermandad extends Model
{
    protected $table = "hermandades";
    protected $primaryKey = "id";
    protected $fillable = [
        "nombre"
    ];

    function bandas() {
        $this->hasMany(Banda::class, "id_hermandad", "id");
    }


}
