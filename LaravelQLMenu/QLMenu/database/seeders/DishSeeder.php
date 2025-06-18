<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use App\Models\Dish;
use Faker\Factory as Faker;

class DishSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $dishes = [
            ['dish_name' => 'Rau Muong Xao', 'type_id' => $faker->numberBetween(1, 5), 'des' => 'Ngon'],
            ['dish_name' => 'Ca Kho To', 'type_id' => $faker->numberBetween(1, 5), 'des' => 'Ngon'],
            ['dish_name' => 'Canh Rong Bien', 'type_id' => $faker->numberBetween(1, 5), 'des' => 'Thom, Ngon'],
            ['dish_name' => 'Banh Mi Hai Phong', 'type_id' => $faker->numberBetween(1, 5), 'des' => 'Gion'],
            ['dish_name' => 'Thit Ba Chi Luoc', 'type_id' => $faker->numberBetween(1, 5), 'des' => 'Khong bi kho'],
            ['dish_name' => 'Vit Quay Van Dinh', 'type_id' => $faker->numberBetween(1, 5), 'des' => 'Thom mui la moc mat'],
            ['dish_name' => 'Canh Rau Ngot', 'type_id' => $faker->numberBetween(1, 5), 'des' => 'Ngot'],
            ['dish_name' => 'Ga Nuong', 'type_id' => $faker->numberBetween(1, 5), 'des' => 'Thom mui tieu xanh'],
        ];
        foreach ($dishes as $dish) {
            DB::table('dishes')->insert([
                'dish_name' => $dish['dish_name'],
                'type_id' => $dish['type_id'],
                'des' => $dish['des']
            ]);
        }
    }
}
