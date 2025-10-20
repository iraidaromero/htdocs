<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo = new Tipo();
        $tipo->nombre = "FP";
        $tipo->save();

        $tipo = new Tipo();
        $tipo->nombre = "UCO";
        $tipo->save();

        $tipo = new Tipo();
        $tipo->nombre = "BACHILLERATO";
        $tipo->save();
    }
}
