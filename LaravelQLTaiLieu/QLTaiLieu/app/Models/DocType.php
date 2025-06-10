<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocType extends Model
{
    protected $table = 'doctype';
    protected $primaryKey = 'doc_type_id';
    public $timestamps = false;

    protected $fillable = [
        'doc_type_name',
    ];

    public function docs()
    {
        return $this->hasMany(Doc::class, 'doc_type_id', 'doc_type_id');
    }
}
