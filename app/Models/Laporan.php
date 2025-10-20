<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'deskripsi', 'nomor_laporan', 'status', 'mahasiswa_id'
    ];

    public function mahasiswa() {
         return $this->belongsTo(Mahasiswa::class);
}
}
