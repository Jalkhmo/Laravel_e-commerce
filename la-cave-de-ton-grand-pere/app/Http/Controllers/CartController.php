<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            abort(404);
        }

        // Récupérer le panier actuel de la session
        $cart = session()->get('cart');

        // Si le panier est vide, initialiser un tableau vide
        if (!$cart) {
            $cart = [];
        }

        // Vérifier si le produit est déjà dans le panier
        if (isset($cart[$productId])) {
            // Augmenter la quantité du produit existant
            $cart[$productId]['quantity']++;
        } else {
            // Ajouter le produit au panier avec une quantité de 1
            $cart[$productId] = [
                'product' => $product,
                'quantity' => 1,
            ];
        }

        // Mettre à jour la session avec le nouveau panier
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Produit ajouté au panier avec succès!');
    }

    public function viewCart()
    {
        // Récupérer le panier actuel de la session
        $cart = session()->get('cart');

        // Charger la vue du panier avec les produits du panier
        return view('cart', compact('cart'));
    }
}
