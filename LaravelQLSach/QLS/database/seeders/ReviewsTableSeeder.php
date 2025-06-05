<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('reviews')->insert([
                'book_id' => rand(1, 10), // Assuming you have 10 books
                'user_id' => rand(1, 10), // Assuming you have 10 users
                'rating' => rand(1, 5),
                'review_text' => $faker->paragraph,
                'review_date' => $faker->date(),
            ]);
        }
    }
}
