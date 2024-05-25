<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerjasama extends Model
{
    protected $table = "kerjasama";
    protected $primaryKey = 'IdKerjasama';
    protected $fillable = ['NamaMitra', 'IdJenisKerjasama', 'Tridarma1', 'Tridarma2', 'Tridarma3', 'Mulai', 'Berakhir', 'Manfaat'];
}
