<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Room;
use Faker\Factory as Faker;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $rooms = [
            ['RoomNumber' => '101', 'RoomType' => 'standard', 'Availability' => 'available'],
            ['RoomNumber' => '102', 'RoomType' => 'deluxe', 'Availability' => 'occupied'],
            ['RoomNumber' => '103', 'RoomType' => 'suite', 'Availability' => 'under maintenance'],
            ['RoomNumber' => '404', 'RoomType' => 'suite', 'Availability' => 'available'],
            ['RoomNumber' => '505', 'RoomType' => 'standard', 'Availability' => 'occupied'],
        ];
        foreach ($rooms as $room) {
            DB::table('rooms')->insert([
                'RoomNumber' => $room['RoomNumber'],
                'RoomType' => $room['RoomType'],
                'Availability' => $room['Availability']
            ]);
        }
    }
}
