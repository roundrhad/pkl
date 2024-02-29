<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan'; // Nama tabel di database

    protected $primaryKey = 'id'; // Nama primary key di tabel

    protected $fillable = [
        'username', // Kolom yang dapat diisi
        'nama',
        'nip',
        // tambahkan kolom lain yang sesuai dengan struktur tabel 'karyawan'
    ];

    // Definisikan relasi dengan tabel User (jika diperlukan)
    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }
}
