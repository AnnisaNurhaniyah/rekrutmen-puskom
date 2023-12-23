<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keterampilan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_keterampilan',
        'tingkat_keterampilan',
    ];
    public $timestamps = false;
}
