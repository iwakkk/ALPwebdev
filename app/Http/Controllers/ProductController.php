<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller
{
    public function getproduct()
    {
        // Get trending dogs (shuffled)
        $trendingDogs = Dog::inRandomOrder()->take(4)->get();

        // Get catalog dogs (paginated)
        $dogs = Dog::paginate(4);

        return view('index', compact('trendingDogs', 'dogs'));
    }

    public function shopproduct(Request $request)
    {
        $category = $request->input('category');
        $sort = $request->input('sort', 'latest'); // Default to sorting by the latest
    
        // Start building the query
        $dogsQuery = Dog::query();
    
        // Filter products by category if a category is specified
        if ($category) {
            $dogsQuery->where('jenis', $category);
        }
        // Get paginated products
        $dogs = $dogsQuery->paginate(9);
    
        // Fetch distinct categories from the dogs table
        $categories = Dog::select('jenis')->distinct()->get();
    
        return view('shop', compact('dogs', 'categories'));
    }
    
    
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $dogs = Dog::where('nama', 'LIKE', "%$keyword%")
            ->paginate(9);
        
        $categories = Dog::select('jenis')->distinct()->get();
    
        return view('shop', compact('dogs', 'categories'));
    }

    public function showProduct($id)
    {
        $dog = Dog::findOrFail($id);

        return view('shopdetail', compact('dog'));
    }

    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');

        return redirect()->route('cart.index'); // Redirect to cart view
    }
}
