<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Department;
use Faker\Factory as Faker;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $Departments = [
            ['DepartmentName' => 'Ban Trí tuệ nhân tạo', 'DepartmentHeadID' => null],
            ['DepartmentName' => 'Ban Phát triển phần mềm', 'DepartmentHeadID' => null],
            ['DepartmentName' => 'Ban Quản lý dự án', 'DepartmentHeadID' => null],
            ['DepartmentName' => 'Ban Kinh doanh', 'DepartmentHeadID' => null],
            ['DepartmentName' => 'Ban Hỗ trợ kỹ thuật', 'DepartmentHeadID' => null],
        ];
        foreach ($Departments as $Department) {
            DB::table('departments')->insert([
                'DepartmentName' => $Department['DepartmentName'],
                'DepartmentHeadID' => $Department['DepartmentHeadID'],
            ]);
        }
    }
}
