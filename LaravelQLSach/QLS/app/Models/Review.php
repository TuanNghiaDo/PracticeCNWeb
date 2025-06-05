<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    public $timestamps = false;
    protected $primaryKey = 'review_id';

    protected $fillable = [
        'book_id',
        'user_id',
        'rating',
        'review_text',
        'review_date',
    ];

    public function book()
    {
        return $this->belongsTo('App\Models\Book', 'book_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
