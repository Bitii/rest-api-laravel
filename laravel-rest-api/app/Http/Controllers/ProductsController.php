<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json(['products' => $products]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|min:2',
            'name' => 'required|string|min:3',
            'description' => 'required|string|min:10',
            'picture' => 'required|string|min:20',
            'price' => 'required|numeric',
            'stock' => 'nullable|numeric',
            
        ]);
        $product = Product::create($request->all());
        
        return response()->json(['product' => $product]);
    }
}