<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class ShopDetailController extends Controller
{

    public function shopdetail($id)
    {
        $dog = Dog::where('id_anjing', $id)->firstOrFail();
        return view('shop-detail', compact('dog'));
    }
    
}
