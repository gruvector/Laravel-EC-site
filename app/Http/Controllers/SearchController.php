<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->search;
        $product = Product::where('product_name', 'LIKE', "%$search%")->paginate(20);
        return view('pages.search', compact('product'));
    }
}
