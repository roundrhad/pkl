<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    // Nama tabel yang terkait dengan model
    protected $table = 'tempat';

    // Kolom-kolom yang bisa diisi secara massal
    protected $fillable = ['nama', 'kapasitas', 'gedung', 'lantai', 'alamat', 'deskripsi', 'imgurl'];

    // Atau gunakan $guarded untuk menetapkan kolom yang tidak boleh diisi secara massal
    // protected $guarded = [];
}