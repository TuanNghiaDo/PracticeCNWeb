<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DishTypeSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $dishTypes = [
            ['type_name' => 'Mon Xao'],
            ['type_name' => 'Mon Chien'],
            ['type_name' => 'Mon Canh'],
            ['type_name' => 'Mon Nuong'],
            ['type_name' => 'Mon Kho'],
            ['type_name' => 'Mon Luoc'],
        ];
        foreach ($dishTypes as $dishType) {
            DB::table('dish_types')->insert([
                'type_name' => $dishType['type_name'],
            ]);
        }
    }
}
