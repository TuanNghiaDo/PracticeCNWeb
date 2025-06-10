<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ThietbiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('thietbis')->insert([
                'ten_thiet_bi' => $faker->name,
                'mota_thiet_bi' => $faker->text(),
                'nam_san_xuat' => $faker->year(),
                'ma_loai' => rand(1, 10)
            ]);
        }
    }
}
