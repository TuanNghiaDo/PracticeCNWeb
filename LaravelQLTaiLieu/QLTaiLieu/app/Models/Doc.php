<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    protected $table = 'doc';
    protected $primaryKey = 'doc_id';
    public $timestamps = false;

    protected $fillable = [
        'doc_name',
        'doc_type_id',
    ];

    public function docType()
    {
        return $this->belongsTo(DocType::class, 'doc_type_id', 'doc_type_id');
    }
}
