<?php

namespace Database\Seeders;

use App\Models\Centro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CentrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $centros = [
            ["centro" => "ARENA", "tipo" => 1],
            ["centro" => "FATIMA", "tipo" => 1],
            ["centro" => "ESCRITORA", "tipo" => 1],
            ["centro" => "UCO", "tipo" => 2],
            ["centro" => "GÓNGORA", "tipo" => 3],
            ["centro" => "ERROR", "tipo" => 34],
        ];

        for ($i = 0; $i < count($centros); $i++) {
            $centro = new Centro();
            $centro->nombre = $centros[$i]["centro"];
            $centro->idTipo = $centros[$i]["tipo"];
            $centro->save();
        }
    }
}
