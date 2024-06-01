<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'dog';
    protected $fillable = ['id_anjing', 'jenis', 'nama', 'gender', 'tanggal_lahir','berat', 'warna', 'deskripsi', 'status_jual', 'gambar'];
}
