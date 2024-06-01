<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'account';
    protected $fillable = ['nama', 'alamat', 'tanggal_lahir', 'nomor_telepon', 'email','username', 'password'];
}
