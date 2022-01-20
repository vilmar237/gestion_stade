<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeTerrain;

class TypeTerrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeTerrain::create([
            'name' => "Tennis"
        ]);

        TypeTerrain::create([
            'name' => "Football"
        ]);

        TypeTerrain::create([
            'name' => "Basket"
        ]);

        TypeTerrain::create([
            'name' => "Voley"
        ]);

        TypeTerrain::create([
            'name' => "Handball"
        ]);
    }
}
