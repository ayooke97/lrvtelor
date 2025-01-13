<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Data extends Authenticatable
{
    use Notifiable;

    protected $table = 'data'; // Nama tabel di database


    protected $fillable = [
        'NIP',
        'Nama',
        'Tempat',
        'Tanggal_Lahir',
        'Jenis_Kelamin',
        'Agama',
        'Status',
        'Alamat',
        'Posisi',
        'email',
        'password',
    ];
    
    protected $hidden = [
        'password',
    ];
}
