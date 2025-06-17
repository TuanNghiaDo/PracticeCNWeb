<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medecine extends Model
{
    use HasFactory;
    protected $table = 'medecines';
    public $timestamps = false;
    protected $primaryKey = 'medecine_id';

    public function medecineType()
    {
        return $this->belongsTo(MedecineType::class, 'medecine_type_id', 'medecine_type_id');
    }

    protected $fillable = [
        'medecine_name',
        'product_date',
        'out_of_date',
        'nhom_duoc_tinh',
        'medecine_type_id',
        'des'
    ];
}
