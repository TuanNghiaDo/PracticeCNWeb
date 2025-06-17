<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicineType extends Model
{
    protected $table = 'medicine_types';
    protected $primaryKey = 'type_id';
    public $timestamps = false;
}
