<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_user',
        'check_in',
        'check_out',
        'jenis_kamar',
        'foto_user',
        'jumlah_kamar'
    ];
}
