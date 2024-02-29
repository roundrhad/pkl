<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'Admin'; // Nama tabel di database

    protected $primaryKey = 'id'; // Nama primary key di tabel

    protected $fillable = [
        'username', // Kolom yang dapat diisi
        'nama',
        'nip',
        // tambahkan kolom lain yang sesuai dengan struktur tabel 'Admin'
    ];

    // Definisikan relasi dengan tabel User (jika diperlukan)
    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }
}
