<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = [
        'nama',
        'nik',
        'alamat',
        'telepon',
        'tanggal_lahir',
        'jenis_kelamin',
    ];
}
