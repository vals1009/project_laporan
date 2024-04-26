<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = ['title', 'description', 'file_path'];

    protected $table = 'laporan';
}
