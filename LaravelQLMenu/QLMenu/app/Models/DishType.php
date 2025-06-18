<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DishType extends Model
{
    protected $table = 'dish_types';
    protected $primaryKey = 'type_id';
    public $timestamps = false;
}
