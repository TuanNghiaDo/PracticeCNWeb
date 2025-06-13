<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $Employees = [
            ['Name' => 'Đỗ Tuấn Nghĩa', 'Location' => 'Hà Nội', 'BirthDate' => $faker->dateTimeBetween('1990-01-01', '2003-12-31')->format('Y-m-d'), 'DepartmentID' => 2],
            ['Name' => 'Nguyễn Văn Pháp', 'Location' => 'Hà Nội', 'BirthDate' => $faker->dateTimeBetween('1990-01-01', '2003-12-31')->format('Y-m-d'), 'DepartmentID' => 2],
            ['Name' => 'Trần Thị Anh', 'Location' => 'Hồ Chí Minh', 'BirthDate' => $faker->dateTimeBetween('1990-01-01', '2003-12-31')->format('Y-m-d'), 'DepartmentID' => 3],
            ['Name' => 'Lê Văn Đức', 'Location' => 'Đà Nẵng', 'BirthDate' => $faker->dateTimeBetween('1990-01-01', '2003-12-31')->format('Y-m-d'), 'DepartmentID' => 4],
            ['Name' => 'Phạm Thị Bồ', 'Location' => 'Hải Phòng', 'BirthDate' => $faker->dateTimeBetween('1990-01-01', '2003-12-31')->format('Y-m-d'), 'DepartmentID' => 5],
            ['Name' => 'Phạm Thị Bắc', 'Location' => 'Hà Nam', 'BirthDate' => $faker->dateTimeBetween('1990-01-01', '2003-12-31')->format('Y-m-d'), 'DepartmentID' => 5],
            ['Name' => 'Mai Thị Chinh', 'Location' => 'Hải Dương', 'BirthDate' => $faker->dateTimeBetween('1990-01-01', '2003-12-31')->format('Y-m-d'), 'DepartmentID' => 5],
            ['Name' => 'Trần Anh Dũng', 'Location' => 'Tuyên Quang', 'BirthDate' => $faker->dateTimeBetween('1990-01-01', '2003-12-31')->format('Y-m-d'), 'DepartmentID' => 2],
            ['Name' => 'Lê Văn Mạnh', 'Location' => 'Hà Giang', 'BirthDate' => $faker->dateTimeBetween('1990-01-01', '2003-12-31')->format('Y-m-d'), 'DepartmentID' => 2],
            ['Name' => 'Phạm Thị Thanh Trúc', 'Location' => 'Hải Phòng', 'BirthDate' => $faker->dateTimeBetween('1990-01-01', '2003-12-31')->format('Y-m-d'), 'DepartmentID' => 4],

        ];
        foreach ($Employees as $Employee) {
            DB::table('employees')->insert([
                'Name' => $Employee['Name'],
                'Location' => $Employee['Location'],
                'BirthDate' => $Employee['BirthDate'],
                'DepartmentID' => $Employee['DepartmentID'],
            ]);
        }
    }
}
