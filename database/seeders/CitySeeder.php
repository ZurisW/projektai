<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::factory()->create([
            'name' => 'Rzeszów',
            'postal_code' => '35‑030'
        ]);
        City::factory()->create([
            'name' => 'Mielec',
            'postal_code' => '35‑031'
        ]);
        City::factory()->create([
            'name' => 'Sanok',
            'postal_code' => '35‑032'
        ]);
        City::factory()->create([
            'name' => 'Przemyśl',
            'postal_code' => '35‑033'
        ]);
    }
}
