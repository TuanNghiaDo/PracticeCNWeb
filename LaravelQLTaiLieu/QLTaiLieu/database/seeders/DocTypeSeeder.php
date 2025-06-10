<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DocTypeSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();
        $docTypes = [
            ['doc_type_name' => 'Sách'],
            ['doc_type_name' => 'Tạp chí'],
            ['doc_type_name' => 'Báo'],
            ['doc_type_name' => 'Luận văn'],
            ['doc_type_name' => 'Đồ án'],
        ];

        foreach ($docTypes as $type) {
            DB::table('doctype')->insert([
                'doc_type_name' => $type['doc_type_name']
            ]);
        }
    }
}
