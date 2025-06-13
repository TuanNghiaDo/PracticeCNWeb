<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('departments', function (Blueprint $table) {
            $table->foreign('DepartmentHeadID')
                ->references('EmployeeID')
                ->on('employees')
                ->onDelete('set null') //khi bảng cha bị xóa thì giá trị DepartmentHeadID sẽ được đặt thành null
                ->onUpdate('cascade');
        });
    }


    public function down(): void
    {
        Schema::table('departments', function (Blueprint $table) {
            //Lệnh để xóa khóa ngoại khi rollback migration
            $table->dropForeign(['DepartmentHeadID']);
        });
    }
};
