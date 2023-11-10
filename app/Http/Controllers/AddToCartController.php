<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;
use Response;

class AddToCartController extends Controller
{
    public function addcart($id)
    {
        $product = Product::where('id', $id)->first();
        $data = array();
        
        if ($product->discount_price == null) {
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = 1;
            $data['price'] = $product->selling_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            $data['options']['color'] = '';
            $data['options']['size'] = '';
            Cart::add($data);
            return \Response::json(['success' => 'Successfully Add On Your Cart']);
        } else {
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = 1;
            $data['price'] = $product->discount_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            $data['options']['color'] = '';
            $data['options']['size'] = '';
            Cart::add($data);
            return \Response::json(['success' => 'Successfully Add On Your Cart']);
        }
    }

    public function check()
    {
        $check = Cart::content();
        return response()->json($check);
    }

    public function ShowCart()
    {
        $cart = Cart::content();
        return view('pages.cart', compact('cart'));
    }

    public function removecart($rowId)
    {
        Cart::remove($rowId);
        $notification = array(
            'message' => 'Successfully remove Cart',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function updatecart(Request $request)
    {
        $rowId = $request->cartid;
        $qty = $request->qty;
        Cart::update($rowId, $qty);
        $notification = array(
            'message' => 'Successfully Update Cart',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    
}
