<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jajan extends Model
{
    protected $fillable = [
        'kategori_id',
        'nama_jajan',
        'harga'
    ];

    public function kategori(){
        return $this->belongsTo(kategori::class);
    }
}
