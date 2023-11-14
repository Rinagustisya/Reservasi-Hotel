<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_tamu',
        'nama_pemesan',
        'email',
        'no_hp',
        'check_in',
        'check_out',
        'jenis_kamar',
        'foto_user',
        'jumlah_kamar'
    ];
}
