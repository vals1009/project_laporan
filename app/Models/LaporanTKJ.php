<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanTKJ extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'description', 'file_path', 'siswa_id'];
    protected $fillable = ['title', 'description', 'siswa_id', 'document_pdf', 'document_word'];

    protected $table = 'laporantkj';

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
