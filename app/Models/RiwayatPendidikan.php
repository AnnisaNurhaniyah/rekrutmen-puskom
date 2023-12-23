<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pelamar',
        'gelar',
        'institusi',
        'jurusan',
        'tahun_mulai',
        'tahun_lulus',
    ];
    public $timestamps = false;

    public function pelamar()
    {
        return $this->belongsTo(Pelamar::class);
    }
}
