<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;

    public function user()
{
    return $this->hasOne(User::class, 'id_pelamar');
}

    protected $fillable = [
        'id_lowongan_pekerjaan',
        'nik',
        'nama_depan',
        'nama_belakang',
        'jenis_kelamin',
        'tgl_lahir',
        'email',
        'alamat',
        'nomor_telepon',
        'foto',
        'cv',
        'status',
        'tgl_diterima',
        'tgl_interview',
    ];
    public $timestamps = false;

    public function lowongan_pekerjaan()
{
    return $this->belongsTo(LowonganPekerjaan::class, 'id_lowongan_pekerjaan');
}

    // Model Pelamar.php

public function keterampilans()
{
    return $this->belongsToMany(Keterampilan::class, 'keterampilan_pelamars', 'id_pelamar', 'id_keterampilan')
        ->withPivot('tingkat_keterampilan');
}


}
