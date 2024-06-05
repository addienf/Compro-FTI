<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestasiMHS extends Model
{
    use HasFactory;
    protected $table = "prestasi_mhs";
    protected $primaryKey = 'IdPrestasi';
    protected $fillable = ['JudulPrestasi', 'ImgPrestasi', 'DescPrestasi'];
}
