<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceMail;
use Illuminate\Http\Request;
use App\Models\Dog;
use App\Models\Cart;

class CartController extends Controller
{

    public function checkout(Request $request)
    {
        $id_account = session()->get('id_account');

        // Fetch user email
        $user = DB::table('account')->where('id_account', $id_account)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        // Fetch cart items
        $cartItems = DB::table('cart')
            ->join('dog', 'cart.id_anjing', '=', 'dog.id_anjing')
            ->where('cart.id_account', $id_account)
            ->select('dog.*')
            ->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        // Generate invoice (this example generates a simple text invoice)
        $invoice = "Invoice for your purchase:\n\n";
        foreach ($cartItems as $item) {
            $invoice .= "Item: {$item->nama}, Price: Rp " . number_format($item->harga, 0, ',', '.') . "\n";
        }

        $subtotal = $cartItems->sum('harga');

    // Generate invoice view
    $invoiceView = view('invoice', ['cartItems' => $cartItems, 'subtotal' => $subtotal])->render();

    // Send the email
    //  \Mail::to(auth()->user()->email)->send(new \App\Mail\InvoiceMail());

        // Assuming you want to clear the cart after checkout
        // You can adjust this according to your business logic
        Cart::where('id_account', auth()->id())->delete();

    return redirect()->route('cart.index')->with('success', 'Invoice sent to your email.');
    }
    public int $cartcount = 0;
    public function add(Request $request)
    {
        $id_account = session()->get('id_account');
        $id_anjing = $request->input('id_anjing');

        // Check if item is already in cart
        $exists = DB::table('cart')
            ->where('id_account', $id_account)
            ->where('id_anjing', $id_anjing)
            ->exists();

        if (!$exists) {
            // Insert new item into cart
            DB::table('cart')->insert([
                'id_account' => $id_account,
                'id_anjing' => $id_anjing,
            ]);
        }

        $this->cartcount++;

        return redirect()->route('cart.index');
    }



    public function index()
    {
        $id_account = session()->get('id_account');

        $cartItems = DB::table('cart')
            ->join('dog', 'cart.id_anjing', '=', 'dog.id_anjing')
            ->where('cart.id_account', $id_account)
            ->select('cart.id_cart', 'dog.*')
            ->get();

        return view('cart', compact('cartItems'));
    }

    public function destroy($id)
    {
        DB::table('cart')->where('id_cart', $id)->delete();

        return redirect()->route('cart.index');
    }

    public function cart()
    {
        return view("cart");
    }
}
