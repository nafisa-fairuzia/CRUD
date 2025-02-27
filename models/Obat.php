<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $table = 'obat';
    protected $fillable = ['nama_obat', 'harga'];

    public function rekamMedis()
    {
        return $this->hasMany(RekamMedis::class);
    }
}
