<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    // protected $fillable = ['title', 'description', 'file_path', 'siswa_id'];
    protected $fillable = ['title', 'description', 'siswa_id'];

    protected $table = 'laporan';

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}