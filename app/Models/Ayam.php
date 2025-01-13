<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayam extends Model
{
    use HasFactory;
    protected $table = 'ayam';

    // Menentukan kolom yang dapat diisi
    protected $fillable = [
        'nama_ayam',
        'umur',
        'kriteria',
        'jumlah',
    ];
    public function kandang()
    {
        return $this->hasMany(Kandang::class, 'ayam_id');
        // Jika relasi one-to-one:
        // return $this->hasOne(Kandang::class, 'ayam_id');
    }
    public function telur()
    {
        return $this->hasMany(Telur::class, 'ayam_id');
    }
}
