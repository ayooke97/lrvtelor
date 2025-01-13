<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandang extends Model
{
    use HasFactory;

    // Menentukan nama tabel secara eksplisit
    protected $table = 'kandang';

    // Menentukan kolom yang dapat diisi
    protected $fillable = [
        'ayam_id',
        'Nama',
        'Kapasitas',
        'Kondisi',
        'Jumlah',
        'Kesehatan',
    ];
  

    public function ayam()
    {
        return $this->belongsTo(Ayam::class, 'ayam_id', 'id');
    }
    public function pakan()
    {
        return $this->hasMany(Pakan::class, 'kandang_id');
    }
}


