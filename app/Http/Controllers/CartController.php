<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class CartController extends Controller
{
    public function cart()
    {
        return view("cart");
    }   
}
