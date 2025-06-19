<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DishSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $dishTypes = [
            ['dish_name' => 'Rau muong xao', 'des' => 'Ngon, thom mui toi', 'type_id' => $faker->numberBetween(1, 6)],
            ['dish_name' => 'Thit kho trung', 'des' => 'Ngon, thom mui toi', 'type_id' => $faker->numberBetween(1, 6)],
            ['dish_name' => 'Canh chua ca loc', 'des' => 'Ngon, thom mui toi', 'type_id' => $faker->numberBetween(1, 6)],
            ['dish_name' => 'Ga nuong muoi ot', 'des' => 'Ngon, thom mui toi', 'type_id' => $faker->numberBetween(1, 6)],
            ['dish_name' => 'Tom kho tieu', 'des' => 'Ngon, thom mui toi', 'type_id' => $faker->numberBetween(1, 6)],
            ['dish_name' => 'Ca luoc nguyen con', 'des' => 'Ngon, thom mui toi', 'type_id' => $faker->numberBetween(1, 6)],
        ];
        foreach ($dishTypes as $dishType) {
            DB::table('dishes')->insert([
                'dish_name' => $dishType['dish_name'],
                'des' => $dishType['des'],
                'type_id' => $dishType['type_id'],
            ]);
        }
    }
}
