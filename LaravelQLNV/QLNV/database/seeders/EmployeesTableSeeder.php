<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeesTableSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();

        // Insert 10 fake employees
        for ($i = 0; $i < 10; $i++) {
            DB::table('employees')->insert([
                'name' => $faker->name,
                'birthday' => $faker->date(),
                'roomId' => rand(1, 3), // Assuming you have 5 rooms with IDs from 1 to 5
            ]);
        }
    }
}
