<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            abort(404);
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'product' => $product,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Produit ajouté au panier avec succès!');
    }

    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function showCheckoutForm(Request $request)
    {
        $cart = $request->session()->get('cart', []);
    
        if (empty($cart)) {
            return redirect()->route('cart.view')->with('error', 'Votre panier est vide.');
        }

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['product']->price * $item['quantity'];
        }
    
        return view('checkout', compact('cart', 'total'));
    }    

    public function processOrder(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'address' => 'required|string',
            'phone_number' => 'required|string',
            'card_number' => 'required|string',
            'total' => 'required|numeric',
        ]);

        $order = new Order();
        $order->email = $request->email;
        $order->product_list = json_encode($request->session()->get('cart')); 
        $order->address = $request->address;
        $order->phone_number = $request->phone_number;
        $order->card_number = $request->card_number;
        $order->total = $request->total;
        $order->save();

        $request->session()->forget('cart'); 

        return redirect()->route('home')->with('success', 'Commande enregistrée avec succès !');
    }
}
