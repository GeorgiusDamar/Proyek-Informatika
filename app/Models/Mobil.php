<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = 'mobil';
    // protected $primaryKey = 'id_mobil'; // Menentukan 'id_mobil' sebagai primary key

    protected $fillable = [
        'id_mobil',
        'no_polisi',
        'warna',
        'jenis',
        'harga_sewa',
    ];
}
