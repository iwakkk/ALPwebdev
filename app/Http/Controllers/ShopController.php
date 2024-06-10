<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public static function getUserID()
    {
        if (session()->has('id_account')) {
            $id = session()->get('id_account');
        } else if (Cookie::get('id_account') != null) {
            $id = Cookie::get('id_account');
        }

        return $id;
    }

    public function shop()
    {
        return view("shop");
    }


    private function getProduct(string $id)
{
    $dataProduct = DB::table('dog')
        ->select('dog.id_anjing', 'dog.nama','dog.harga', 'dog.gambar', 'dog.deskripsi', 'dog.jenis', 'dog.berat')
        ->where('dog.id_anjing', '=', $id)
        ->get();

    return $dataProduct;
}

    public static function getWishlistId()
    {
        $userID = session()->get('id_account');
        $wishlistID = DB::table('wishlist')
        ->select('id_wishlist')
        ->join('account', 'account.id_account', '=', $userID)
        ->get();

        return $wishlistID;
    }

    public function ShowProductDetails(string $id)
    {


        $dataProduct = $this->getProduct($id);
        $product = $dataProduct->first();
        return view("shop-detail", [
            "data" => $dataProduct,
            "product" => $product
        ]);
    }



    public function addWishlist(Request $request)
    {
         $userID = session()->get('id_account');

        $wishlist = DB::table('wishlist')
            ->select('id_wishlist')
            ->where('id_account', '=', $userID)
            ->first();
        if ($wishlist) {
            $wishlistID = $wishlist->WISHLIST_ID; // Access the wishlist ID property
            $id = $request->input('id');

            $checkDuplicate = DB::table('wishlist')
                            ->select('id_wishlist')
                            ->where('id_wishlist', '=', $wishlistID)
                            ->where('id_anjing', '=', $id)
                            ->count();
            if ($checkDuplicate == 0) {
                $insert = DB::table('wishlist')
                    ->insert([
                        'id_wishlist' => $wishlistID,
                        'id_anjing' => $id
                    ]);
                    if ($insert) {
                        return response()->json(['success' => true, 'message' => 'Item added to wishlist successfully']);
                    } else {
                        return response()->json(['success' => false, 'message' => 'Insert failed']);
                    }
            }
             else {
                $delete = DB::table('wishlist')
                ->where('id_wishlist', '=', $wishlistID)
                ->where('id_anjing', '=', $id)
                ->delete();
                if ($delete) {
                    return response()->json(['success' => true, 'message' => 'Deleted from wishlist']);
                } else {
                    return response()->json(['success' => false, 'message' => 'Delete failed']);
                }
            }
        }
    }

}
