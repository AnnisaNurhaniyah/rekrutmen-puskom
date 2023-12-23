<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pelamar',
        'posisi',
        'perusahaan',
        'tanggal_mulai',
        'tanggal_berakhir',
        'deskripsi_pekerjaan',
    ];
    public $timestamps = false;

    public function pelamar()
    {
        return $this->belongsTo(Pelamar::class);
    }
}
