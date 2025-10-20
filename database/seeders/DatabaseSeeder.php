<?php

namespace Database\Seeders;

use App\Models\Banda;
use App\Models\Centro;
use App\Models\Hermandad;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(TiposSeeder::class);
        $this->call(CentrosSeeder::class);
        Centro::factory(100)->create();

        $this->call(HermandadSeeder::class);
        $this->call(BandaSeeder::class);
        $this->call(Hermandad_bandaSeeder::class);

    }
}
