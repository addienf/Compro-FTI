<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPertukaran extends Model
{
    use HasFactory;
    protected $table = "jenis_pertukaran";
    protected $primaryKey = 'IdJenisPertukaran';
    protected $fillable = ['NamaJenisPertukaran'];
}
