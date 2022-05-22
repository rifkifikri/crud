<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class M_Buku extends Model
{
    //  use softDeletes;
    use HasFactory;
    
    protected $table = 'tb_buku';
    protected $fillable =[
        'isbn',
        'judul_buku',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'cetakan',
        'jumlah_halaman'
    ];
    
    protected $hidden;
}
