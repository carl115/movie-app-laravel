<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'synopsis',
    ];

    protected $casts = [
        'premiere_date' => 'datetime'
    ];

    /* FUNCIONA PERO TRAE SOLO UN DATO
    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'movie_id', 'id');
    }
    */

    /*
    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'movie_id', 'id');
    }
    */
}
