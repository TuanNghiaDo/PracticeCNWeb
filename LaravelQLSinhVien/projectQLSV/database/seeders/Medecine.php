<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Medecine extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $medecines = [
            [
                'medecine_name' => 'Paracetamol',
                'medecine_type_id' => 1,
                'des' => 'Dùng cho các trường hợp sốt, viêm nhiễm nhẹ',
                'product_date' => $faker->dateTimeBetween('-1 year', 'now'),
                'out_of_date' => $faker->dateTimeBetween('now', '+1 year'),
                'nhom_duoc_tinh' => 'Gỉam đau, hạ sốt',
            ],
            [
                'medecine_name' => 'Panadol',
                'medecine_type_id' => 1,
                'des' => 'Dùng cho các trường hợp sốt, viêm nhiễm nhẹ',
                'product_date' => $faker->dateTimeBetween('-1 year', 'now'),
                'out_of_date' => $faker->dateTimeBetween('now', '+1 year'),
                'nhom_duoc_tinh' => 'Gỉam đau, hạ sốt',
            ],
            [
                'medecine_name' => 'Smecta',
                'medecine_type_id' => 3,
                'des' => 'Thuốc điều trị tiêu chảy cấp và mãn tính',
                'product_date' => $faker->dateTimeBetween('-1 year', 'now'),
                'out_of_date' => $faker->dateTimeBetween('now', '+1 year'),
                'nhom_duoc_tinh' => 'Trị tiêu chảy, đầy bụng',
            ],
            [
                'medecine_name' => 'Mỡ Eurax',
                'medecine_type_id' => 4,
                'des' => 'Dùng cho các trường hợp dị ứng, viêm da, muỗi đốt',
                'product_date' => $faker->dateTimeBetween('-1 year', 'now'),
                'out_of_date' => $faker->dateTimeBetween('now', '+1 year'),
                'nhom_duoc_tinh' => 'Trị các bệnh ngoài da',
            ],
            [
                'medecine_name' => 'Berberin',
                'medecine_type_id' => 3,
                'des' => 'Thuốc có nguồn gốc từ thảo dược, thường dùng để điều trị tiêu chảy, rối loạn tiêu hóa.',
                'product_date' => $faker->dateTimeBetween('-1 year', 'now'),
                'out_of_date' => $faker->dateTimeBetween('now', '+1 year'),
                'nhom_duoc_tinh' => 'Trị tiêu chảy, đầy hơi, khó tiêu',
            ],

        ];
        foreach ($medecines as $medecine) {
            DB::table('medecines')->insert([
                'medecine_name' => $medecine['medecine_name'],
                'medecine_type_id' => $medecine['medecine_type_id'],
                'product_date' => $medecine['product_date'],
                'des' => $medecine['des'],
                'out_of_date' => $medecine['out_of_date'],
                'nhom_duoc_tinh' => $medecine['nhom_duoc_tinh'],
            ]);
        }
    }
}
