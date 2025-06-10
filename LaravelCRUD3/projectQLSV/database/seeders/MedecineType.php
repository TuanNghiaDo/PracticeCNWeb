<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MedecineType extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $medecineTypes = [
            [
                'medecine_type_name' => 'Thuốc hạ sốt, kháng viêm',
                'des' => 'Dùng cho các trường hợp sốt, viêm nhiễm nhẹ',
            ],
            [
                'medecine_type_name' => 'Thuốc giảm đau',
                'des' => 'Dùng cho các trường hợp đau nhức cơ thể'
            ],
            [
                'medecine_type_name' => 'Thuốc tiêu hóa',
                'des' => 'Dùng cho các vấn đề về tiêu hóa như đầy hơi, khó tiêu'
            ],
            [
                'medecine_type_name' => 'Thuốc da liễu',
                'des' => 'Dùng cho các vấn đề về da như mụn, viêm da'
            ],
            [
                'medecine_type_name' => 'Thuốc sát trùng',
                'des' => 'Dùng để sát trùng vết thương, ngăn ngừa nhiễm trùng'
            ],

        ];
        foreach ($medecineTypes as $type) {
            DB::table('medecinetypes')->insert([
                'medecine_type_name' => $type['medecine_type_name'],
                'des' => $type['des'],
            ]);
        }
    }
}
