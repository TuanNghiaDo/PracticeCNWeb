<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Department;
use Faker\Factory as Faker;
class RoomSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $departments = [
            ['DepartmentName' => '101', 'RoomType' => 'standard', 'Availability' => 'available'],
            ['DepartmentName' => '102', 'RoomType' => 'deluxe', 'Availability' => 'occupied'],
            ['DepartmentName' => '103', 'RoomType' => 'suite', 'Availability' => 'under maintenance'],
            ['DepartmentName' => '404', 'RoomType' => 'suite', 'Availability' => 'available'],
            ['DepartmentName' => '505', 'RoomType' => 'standard', 'Availability' => 'occupied'],
        ];
        foreach ($departments as $room) {
            DB::table('departments')->insert([
                'DepartmentName' => $room['DepartmentName'],
                'RoomType' => $room['RoomType'],
                'Availability' => $room['Availability']
            ]);
        }
    }
