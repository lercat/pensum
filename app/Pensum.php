<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pensum extends Model
{
    protected $fillable = [
        'titre', 'detail'
    ];
}
