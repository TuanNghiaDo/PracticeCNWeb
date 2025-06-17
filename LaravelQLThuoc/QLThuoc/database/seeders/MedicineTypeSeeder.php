<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MedicineTypeSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $medicineTypes = [
            ['type_name' => 'Kháng sinh', 'des' => ' thường được dùng để điều trị nhiễm khuẩn.'],
            ['type_name' => 'Gỉam đau, hạ sốt', 'des' => ' thường được dùng để điều trị sốt, cảm lạnh.'],
            ['type_name' => 'Kháng viêm', 'des' => '  dùng trong các trường hợp viêm nặng.'],
            ['type_name' => 'Tiêu hóa', 'des' => ' thường được dùng để giảm tiết axit dạ dày.'],
            ['type_name' => 'Tim mạch', 'des' => ' thường được dùng để điều trị điều trị huyết áp cao, đau thắt ngực.'],
            ['type_name' => 'Hô hấp', 'des' => ' thường được dùng để điều trị điều trị hen suyễn và viêm mũi dị ứng.'],
        ];
        foreach ($medicineTypes as $medicineType) {
            DB::table('medicine_types')->insert([
                'type_name' => $medicineType['type_name'],
                'des' => $medicineType['des'],
            ]);
        }
    }
}
