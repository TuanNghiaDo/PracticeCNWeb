<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Room;

class Employee extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'employees';
    protected $primaryKey = 'id';

    public function room()
    {
        return $this->belongsTo(Room::class, 'roomId', 'id');
    }

    protected $fillable = [
        'name',
        'birthday',
        'roomId',
    ];
}
