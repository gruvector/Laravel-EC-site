<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductStockController extends Controller
{
    public function ProductStock()
    {
        $product = Product::all();
        return view('admin.stock.stock', compact('product'));
    }
}
