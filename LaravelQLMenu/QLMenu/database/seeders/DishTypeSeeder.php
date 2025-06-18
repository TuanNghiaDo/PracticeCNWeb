<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use App\Models\DishType;
use Faker\Factory as Faker;

class DishTypeSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $types = [
            ['type_name' => 'Mon Banh Mi'],
            ['type_name' => 'Mon Rau Xao'],
            ['type_name' => 'Mon Canh'],
            ['type_name' => 'Mon Nuong'],
            ['type_name' => 'Mon Luoc'],
        ];
        foreach ($types as $type) {
            DB::table('dish_types')->insert([
                'type_name' => $type['type_name'],
            ]);
        }
    }
}
