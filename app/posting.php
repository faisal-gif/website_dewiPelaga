<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posting extends Model
{
    public $fillable = [
        'idUser','namaPosting', 'isiPosting','fotoPosting'
    ];
}
