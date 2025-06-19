<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $table = 'dishes';
    protected $primaryKey = 'dish_id';
    public $timestamps = false;

    protected $fillable = [
        'dish_name',
        'type_id',
        'des',
    ];

    public function dishType()
    {
        return $this->belongsTo(DishType::class, 'type_id', 'type_id');
    }
}
