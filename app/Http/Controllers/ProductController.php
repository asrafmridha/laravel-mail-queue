<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function store(Request $request)
    {
        $product = new Product();

        $product->image = $request->image->store('profile', 'public');
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        return back()->with('success', 'Product Created Successfully');
    }
}
