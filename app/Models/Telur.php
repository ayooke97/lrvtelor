<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telur extends Model
{
    use HasFactory;
    protected $table = 'produksitelur';
    protected $fillable = [
        'ayam_id',
        'tglproduksi',
        'jumlah',
        'kualitas',
        'berat',
        'ukuran',
    ];
    public function ayam()
    {
        return $this->belongsTo(Ayam::class, 'ayam_id');
    }
}
