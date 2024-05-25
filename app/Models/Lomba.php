<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    use HasFactory;
    protected $table = "lomba";
    protected $primaryKey = 'IdLomba';
    protected $fillable = ['JudulLomba', 'ImgLomba', 'DescLomba'];
}
