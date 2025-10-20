<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = "tipos";
    protected $primaryKey = "id";

    protected $fillable = [
        "nombre",
    ];
}
