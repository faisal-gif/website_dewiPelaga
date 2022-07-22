<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    public $fillable = [
        'idUser','namaBarang', 'jenisBarang','foto','keteranganBarang','hargaBarang','informasiLainnya'
    ];
}
