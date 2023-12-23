<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeterampilanPelamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pelamar',
        'id_keterampilan',
        'tingkat_keterampilan',
    ];
    public $timestamps = false;

    public function pelamar()
    {
        return $this->belongsTo(Pelamar::class);
    }

    public function keterampilan()
{
    return $this->belongsTo(Keterampilan::class, 'id_keterampilan');
}
}
