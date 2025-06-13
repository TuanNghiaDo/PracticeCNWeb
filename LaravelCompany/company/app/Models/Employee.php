<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'EmployeeID';
    public $timestamps = false;
    protected $fillable = [
        'Name',
        'Location',
        'BirthDate',
        'DepartmentID',
    ];
    public function department()
    {
        return $this->belongsTo(Department::class, 'DepartmentID', 'DepartmentID');
    }
}
