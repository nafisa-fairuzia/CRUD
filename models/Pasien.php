<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';
    protected $fillable = ['nama', 'tanggal_lahir', 'alamat', 'nomor_telepon'];

    public function rekamMedis()
    {
        return $this->hasMany(RekamMedis::class);
    }
}
