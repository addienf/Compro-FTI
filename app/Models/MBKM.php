<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MBKM extends Model
{
    use HasFactory;
    protected $table = "mbkm";
    protected $primaryKey = 'IdMBKM';
    protected $fillable = [
        'IdJenisMBKM', 'IdJenisPertukaran', 'NIM', 'Nama', 'AsalKampus', 'AsalProdi', 'TujuanKampus', 'Tahun', 'NamaPerusahaan', 'Lokasi', 'Periode', 'Judul', 'JenisUsaha'
    ];
}
