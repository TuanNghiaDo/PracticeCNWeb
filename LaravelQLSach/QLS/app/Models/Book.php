<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'author',
        'genre',
        'publication_year',
        'ISBN',
        'cover_image_url',
    ];

    public function review()
    {
        return $this->hasMany('App\Models\Review', 'book_id');
    }
}
