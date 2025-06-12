<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'BookingID';
    public $timestamps = false;

    protected $fillable = [
        'CustomerID',
        'RoomID',
        'CheckInDate',
        'CheckOutDate',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustomerID');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'RoomID');
    }
}
