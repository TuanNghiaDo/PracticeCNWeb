<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Classroom;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'students';
    protected $primaryKey = 'StudentID';

    public function classroom()
    {
        return $this->belongsTo(ClassRoom::class, 'ClassroomID', 'ClassroomID');
    }

    protected $fillable = [
        'StudentName',
        'StudentEmail',
        'StudentGender',
        'ClassroomID'
    ];
}
