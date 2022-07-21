<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    public $fillable = [
        'idUser','namaBarang', 'jenisBarang', 'stok','foto','keteranganBarang','hargaBarang'
    ];
}
