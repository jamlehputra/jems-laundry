<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laundry extends Model
{

    protected $fillable =  ['kd_barang',  'nama_barang', 'jenis_barang', 'berat', 'harga' ];
}
