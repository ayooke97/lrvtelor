<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakan extends Model
{
    use HasFactory;
    protected $table = 'pakan';

    // Menentukan kolom yang dapat diisi
    protected $fillable = [
        'kandang_id',
        'nama_pakan',
        'komposisi',
        'tglmasuk',
        'tglkeluar',
        'total',
        'kebutuhan',
    ];
    public function kandang()
    {
        return $this->belongsTo(Kandang::class);
    }
}
