<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    public function wishlist()
    {
        return view("wishlist");
    }

    public function store(Request $request, $id_anjing)
    {

        // Assuming you have a user authentication system and the user is logged in
        $id_account = session()->get('id_account');

        \Log::info('Authenticated user ID: ' . $id_account);

        if (is_null($id_account)) {
            return redirect()->route('login')->with('message', 'You need to login to add to wishlist.');
        }

        // Check if the dog is already in the wishlist
        $existingWishlist = Wishlist::where('id_account', $id_account)
                                    ->where('id_anjing', $id_anjing)
                                    ->first();

        if ($existingWishlist) {
            return redirect()->back()->with('message', 'Dog is already in your wishlist.');
        }

        // Add the dog to the wishlist
        $wishlist = new Wishlist();
        $wishlist->id_account = $id_account;
        $wishlist->id_anjing = $id_anjing;
        $wishlist->save();

        return redirect()->back()->with('message', 'Dog added to wishlist successfully!');
    }

    public function showWishlist()
    {
        // Assuming you have a user authentication system and the user is logged in
        $id_account = session()->get('id_account');
        // Fetch the wishlist items for the logged-in user
        $wishlistItems = Wishlist::where('id_account', $id_account)
        ->join('dog', 'wishlist.id_anjing', '=', 'dog.id_anjing')
        ->select('wishlist.id_anjing', 'dog.gambar', 'dog.jenis', 'dog.nama', 'dog.deskripsi', 'dog.harga')
        ->get();

        return view('wishlist', compact('wishlistItems'));
    }
    public function destroy(Request $request)
{
    $id = $request->input('id');
    $delete = DB::table('wishlist')
        ->where('id_anjing', $id)
        ->delete();

        if ($delete) {
            // If deletion is successful, redirect back to the wishlist page
            return redirect()->route('wishlist')->with('success', 'Item successfully deleted from wishlist.');
        } else {
            // If deletion fails, redirect back to the wishlist page with an error message
            return redirect()->route('wishlist')->with('error', 'Deletion failed. Please try again.');
        }
}
}
