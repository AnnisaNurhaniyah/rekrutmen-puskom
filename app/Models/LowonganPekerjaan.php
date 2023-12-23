<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LowonganPekerjaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_pekerjaan',
        'deskripsi_pekerjaan',
        'kualifikasi',
        'tanggal_posting',
        'deadline',
        'kuota',
        'jenis_kelamin',
        'kelahiran',
    ];

    protected $dates = ['tanggal_posting', 'deadline'];
    public $timestamps = false;
}
