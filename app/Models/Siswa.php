<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama', 'jurusan_id', 'kelas'];
    
    // Mendapatkan jurusan dari siswa ini.
    
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    /**
     * Mendapatkan laporan yang dimiliki siswa.
     */
    public function laporan()
    {
        return $this->hasMany(Laporan::class);
    }
}