<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Farm;

class FarmSeeder extends Seeder
{
    public function run()
    {
        Farm::create([
            'name' => 'Farm One',
            'email' => 'farmone@example.com',
            'website' => 'http://farmone.com',
            'user_id' => 1,
        ]);

        Farm::create([
            'name' => 'Farm Two',
            'email' => 'farmtwo@example.com',
            'website' => 'http://farmtwo.com',
            'user_id' => 1,
        ]);

        Farm::create([
            'name' => 'Farm Three',
            'email' => 'farmthree@example.com',
            'website' => 'http://farmthree.com',
            'user_id' => 2,
        ]);

        Farm::create([
            'name' => 'Farm Four',
            'email' => 'farmfour@example.com',
            'website' => 'http://farmfour.com',
            'user_id' => 2,
        ]);
    }
}

