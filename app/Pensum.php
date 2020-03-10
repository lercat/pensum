<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Pensum extends Model

{
    use SearchableTrait;
    protected $searchable = [
        'columns' => [
            'pensums.titre' => 10,
            'pensums.detail' => 5,
        ]
        ];

    protected $fillable = [
        'titre', 'detail'
    ];

}
