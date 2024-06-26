<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanMHS extends Model
{
    use HasFactory;
    protected $table = "kegiatan_mhs";
    protected $primaryKey = 'IdKegiatan';
    protected $fillable = ['JudulKegiatan', 'ImgKegiatan', 'DescKegiatan'];
}
