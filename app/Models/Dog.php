<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dog extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = false;
    protected $table = 'dog';
    protected $primaryKey = 'id_anjing';
    protected $keyType = 'String';
    protected $fillable = ['id_anjing', 'jenis', 'nama', 'gender', 'tanggal_lahir','berat', 'warna', 'deskripsi', 'status_jual', 'gambar'];

    public function getAgeAttribute()
    {
        // Calculate the difference in years and months
        $years = floor(Carbon::parse($this->tanggal_lahir)->diffInYears(Carbon::now()));
        $months = Carbon::parse($this->tanggal_lahir)->diffInMonths(Carbon::now()) % 12;

        // Format the age
        return "{$years} years {$months} months";
    }
}
