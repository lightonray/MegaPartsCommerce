<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WelcomeController extends Controller
{
    public function listProducts()
    {
        $products = Product::all(); // Assuming you have a "products" table

        return view('welcome', compact('products'));
    }

}
