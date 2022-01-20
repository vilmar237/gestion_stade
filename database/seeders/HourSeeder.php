<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hour;

class HourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=8; $i < 22; $i++) { 
            if($i == 10 || $i == 11 || $i == 12 || $i == 13 || $i == 14 || $i == 15 || $i == 16 || $i == 17 || $i == 18 || $i == 19 || $i == 20 || $i == 21)
            {
                Hour::create([
                    'heure' => $i.":00"
                ]);
            }
            else 
            {
                Hour::create([
                    'heure' => "0".$i.":00"
                ]);
            }
	    	
    	}
    }
}
