<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PKM extends Model
{
    use HasFactory;
    protected $table = "pkm";
    protected $primaryKey = 'IdPKM';
    protected $fillable = ['JudulPKM', 'ImgPKM', 'DescPKM'];
}
