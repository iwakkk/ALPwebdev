<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'wishlist';
    protected $fillable = ['id_wishlist','id_anjing', 'id_account'];
}
