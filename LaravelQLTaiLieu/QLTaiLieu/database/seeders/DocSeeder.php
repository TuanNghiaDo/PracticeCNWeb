<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DocSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $docs = [
            ['doc_name' => 'Introduction to Laravel', 'doc_type_id' => 1],
            ['doc_name' => 'Advanced PHP Programming', 'doc_type_id' => 1],
            ['doc_name' => 'Laravel Best Practices', 'doc_type_id' => 1],
            ['doc_name' => 'Web Development Trends', 'doc_type_id' => 2],
            ['doc_name' => 'The Future of JavaScript', 'doc_type_id' => 2],
        ];
        foreach ($docs as $doc) {
            DB::table('doc')->insert([
                'doc_name' => $doc['doc_name'],
                'doc_type_id' => $doc['doc_type_id']
            ]);
        }
    }
}
