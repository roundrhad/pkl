<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    
    protected $table = 'peminjam';

    protected $fillable = [
        'first_name',
        'divisi',
        'nip',
        'purpose',
        'tanggal_peminjaman', 
        'start_time',
        'end_time',
    ];
}