<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'name',
        'cover_url',
        'artist'
    ];
    protected $table = 'albuns';
}
