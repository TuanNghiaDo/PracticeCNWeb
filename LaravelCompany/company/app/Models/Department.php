<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $primaryKey = 'DepartmentID';
    public $timestamps = false;
    protected $fillable = [
        'DepartmentName',
        'DepartmentHeadID',
    ];
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'DepartmentHeadID', 'EmployeeID');
    }

    public function hasEmployees()
    {
        // hasMany(RelatedModel, foreign_key, local_key)
        return $this->hasMany(Employee::class, 'DepartmentID', 'DepartmentID');
    }
}
