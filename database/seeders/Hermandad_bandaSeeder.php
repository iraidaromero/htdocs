<?php

namespace Database\Seeders;

use App\Models\Hermandad_banda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Hermandad_bandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hermandad_banda = new Hermandad_banda();
        $hermandad_banda->id_hermandad=1;
        $hermandad_banda->id_banda=1;
        $hermandad_banda->save();

        $hermandad_banda = new Hermandad_banda();
        $hermandad_banda->id_hermandad=1;
        $hermandad_banda->id_banda=2;
        $hermandad_banda->save();

        $hermandad_banda = new Hermandad_banda();
        $hermandad_banda->id_hermandad=2;
        $hermandad_banda->id_banda=2;
        $hermandad_banda->save();

    }
}
