<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table = 'medicines';
    protected $primaryKey = 'medicine_id';
    public $timestamps = false;
    protected $fillable = [
        'medicine_name',
        'des',
        'product_date',
        'expiry_date',
        'medicinal_group',
        'type_id'
    ];
    public function medicineType()
    {
        return $this->belongsTo(MedicineType::class, 'type_id', 'type_id');
    }
}
