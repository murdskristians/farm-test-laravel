<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    public function run()
    {
        Animal::create([
            'animal_number' => 'A001',
            'type_name' => 'Cow',
            'years' => 2,
            'farm_id' => 1,
        ]);

        Animal::create([
            'animal_number' => 'A002',
            'type_name' => 'Sheep',
            'years' => 1,
            'farm_id' => 1,
        ]);

        Animal::create([
            'animal_number' => 'A003',
            'type_name' => 'Chicken',
            'years' => 1,
            'farm_id' => 2,
        ]);

        Animal::create([
            'animal_number' => 'A004',
            'type_name' => 'Goat',
            'years' => 3,
            'farm_id' => 3,
        ]);

        Animal::create([
            'animal_number' => 'A005',
            'type_name' => 'Pig',
            'years' => 2,
            'farm_id' => 4,
        ]);

        Animal::create([
            'animal_number' => 'A006',
            'type_name' => 'Horse',
            'years' => 5,
            'farm_id' => 4,
        ]);
    }
}

