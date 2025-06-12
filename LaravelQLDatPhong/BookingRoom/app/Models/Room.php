<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'RoomID';
    public $timestamps = false;

    protected $fillable = [
        'RoomNumber',
        'RoomType',
        'Availability',
    ];
}
