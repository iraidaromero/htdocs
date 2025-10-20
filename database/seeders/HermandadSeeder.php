<?php

namespace Database\Seeders;

use App\Models\Hermandad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HermandadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hermandad = new Hermandad();
        $hermandad->id=1;
        $hermandad->nombre="Hermandad Pasion";
        $hermandad->save();

        $hermandad = new Hermandad();
        $hermandad->id=2;
        $hermandad->nombre="Hermandad Paz";
        $hermandad->save();

        $hermandad = new Hermandad();
        $hermandad->id=3;
        $hermandad->nombre="Hermandad Huerto";
        $hermandad->save();
    }
}
