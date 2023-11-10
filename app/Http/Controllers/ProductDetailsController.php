<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function ProductdView($id, $product_name)
    {
        $product = Product::where('id', $id)->first();

        $color = $product->product_color;
        $product_color = explode(',', $color);

        $size = $product->product_size;
        $product_size = explode(',', $size);

        return view('pages.product_details', compact('product', 'product_color', 'product_size'));
    }

    public function addtocart(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        $data = array();
        if ($product->discount_price == null) {
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = $request->qty;
            $data['price'] = $product->selling_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            $data['options']['color'] = $request->product_color;
            $data['options']['size'] = $request->product_size;
            Cart::add($data);
            $notification = array(
                'message' => 'Successfully Add On Your Cart',
                'alert-type' => 'success',
            );
            return redirect()->back()->with($notification);
        } else {
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = $request->qty;
            $data['price'] = $product->discount_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            $data['options']['color'] = $request->product_color;
            $data['options']['size'] = $request->product_size;
            Cart::add($data);
            $notification = array(
                'message' => 'Successfully Add On Your Cart',
                'alert-type' => 'success',
            );
            return redirect()->back()->with($notification);
        }
    }
}
