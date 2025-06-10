<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedecineType extends Model
{
    protected $table = 'medecinetypes';
    public $timestamps = false;
    protected $primaryKey = 'medecine_type_id';
}
