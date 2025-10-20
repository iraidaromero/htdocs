<?php

namespace Database\Seeders;

use App\Models\Banda;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banda = new Banda();
        $banda->nombre="Banda Cristo de gracia";
        $banda->save();

        $banda = new Banda();
        $banda->nombre="Banda Salud";
        $banda->save();

        $banda = new Banda();
        $banda->nombre="Banda Coronación de Espinas";
        $banda->save();
    }
}
