<?php

namespace App\Http\Controllers;
use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class ProductController extends Controller

{
    public function getproduct()
    {
        $dogs = Dog::paginate(4);
        return view('index', compact('dogs'));
    }

    public function shopproduct()
    {
        $dogs = Dog::paginate(9);
        return view('shop', compact('dogs'));
    }

    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
    
        return redirect()->route('cart.index'); // Redirect to cart view
    }
}   
