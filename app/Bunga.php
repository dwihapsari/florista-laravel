<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bunga extends Model
{
    protected $table = 'bunga';

    protected $fillable = [
        'kode',
        'nama',
        'jenis',
        'harga',
        'keterangan',
        'stok'
    ];
}
