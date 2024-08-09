<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama',
        'Jenis_Kelamin',
        'Umur',
        'No_Telp',
        'Alamat',
        'Jabatan',
    ];
}
