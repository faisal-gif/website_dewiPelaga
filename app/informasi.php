<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informasi extends Model
{
    public $fillable = [
        'idUser','namaInformasi', 'jenisInformasi', 'isiInformasi','tokoOnline','socialMedia','lainnya'
    ];
}
