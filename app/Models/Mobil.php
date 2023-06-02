<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = "mobils";
    
    protected $fillable = [
        'nama_mobil',
        'cc',
        'nomor_polisi',
        'warna',
        'tahun_mobil',
        'foto',
        'merk_id',
        'tipe_mobil_id'
    ];
}