<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = "pengumuman";
    protected $primaryKey = 'IdPengumuman';
    protected $fillable = ['IdPengumuman', 'Judul', 'Penulis', 'Tanggal', 'ImgPengumuman', 'IsiPengumuman'];
}
