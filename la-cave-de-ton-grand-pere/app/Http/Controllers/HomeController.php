<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category; // Assurez-vous d'importer le modèle Category si ce n'est pas déjà fait
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all(); 
        return view('home', compact('products', 'categories'));
    }
}
