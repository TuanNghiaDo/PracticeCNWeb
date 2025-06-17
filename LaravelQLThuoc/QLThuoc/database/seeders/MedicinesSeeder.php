<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MedicinesSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $medicineTypes = [
            ['medicine_name' => 'Amoxicillin', 'des' => ' thường được dùng để điều trị nhiễm khuẩn.', 'product_date' => $faker->dateTimeBetween('-3 years', 'now'), 'expiry_date' => $faker->dateTimeBetween('now', '+3 years'), 'medicinal_group' => 'Tiêu hóa', 'type_id' => $faker->numberBetween(1, 6)],
            ['medicine_name' => 'Panadol', 'des' => ' thường được dùng để điều trị sốt, cảm lạnh.', 'product_date' => $faker->dateTimeBetween('-3 years', 'now'), 'expiry_date' => $faker->dateTimeBetween('now', '+3 years'), 'medicinal_group' => 'Gỉam đau', 'type_id' => $faker->numberBetween(1, 6)],
            ['medicine_name' => 'Prednisone', 'des' => '  dùng trong các trường hợp viêm nặng.', 'product_date' => $faker->dateTimeBetween('-3 years', 'now'), 'expiry_date' => $faker->dateTimeBetween('now', '+3 years'), 'medicinal_group' => 'Kháng sinh', 'type_id' => $faker->numberBetween(1, 6)],
            ['medicine_name' => 'Berberin', 'des' => ' thường được dùng để giảm tiết axit dạ dày.', 'product_date' => $faker->dateTimeBetween('-3 years', 'now'), 'expiry_date' => $faker->dateTimeBetween('now', '+3 years'), 'medicinal_group' => 'Chống viêm', 'type_id' => $faker->numberBetween(1, 6)],
            ['medicine_name' => 'Captopril', 'des' => ' thường được dùng để điều trị huyết áp cao, đau thắt ngực.', 'product_date' => $faker->dateTimeBetween('-3 years', 'now'), 'expiry_date' => $faker->dateTimeBetween('now', '+3 years'), 'medicinal_group' => 'Hạ huyết áp', 'type_id' => $faker->numberBetween(1, 6)],
            ['medicine_name' => 'Beta-2 Agonists', 'des' => ' thường được dùng để điều trị hen suyễn và viêm mũi dị ứng.', 'product_date' => $faker->dateTimeBetween('-3 years', 'now'), 'expiry_date' => $faker->dateTimeBetween('now', '+3 years'), 'medicinal_group' => 'Chống trầm cảm', 'type_id' => $faker->numberBetween(1, 6)],
        ];
        foreach ($medicineTypes as $medicineType) {
            DB::table('medicines')->insert([
                'medicine_name' => $medicineType['medicine_name'],
                'des' => $medicineType['des'],
                'product_date' => $medicineType['product_date'],
                'expiry_date' => $medicineType['expiry_date'],
                'medicinal_group' => $medicineType['medicinal_group'],
                'type_id' => $medicineType['type_id'],
            ]);
        }
    }
}
