<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Auth;
use DB;

class WishlistController extends Controller
{
    public function addwishlist($id)
    {
        $userid = Auth::id();
        $data = array(
            'user_id' => $userid,
            'product_id' => $id,
        );

        $check = Wishlist::where('user_id', $userid)->where('product_id', $id)->first();

        if (Auth::Check()) {

            if ($check) {
                return \Response::json(['error' => 'Product Allready has on your Wishlist']);
            } else {
                Wishlist::insert($data);

                return \Response::json(['success' => 'Product Added On Wishlist']);
            }

        } else {
            return \Response::json(['error' => 'At first login your account']);
        }
    }

    public function wishlist()
    {
        $userid = Auth::id();
        $product = DB::table('wishlists')
                    ->join('products', 'wishlists.product_id','products.id')
                    ->select('products.*', 'wishlists.user_id')
                    ->where('wishlists.user_id',$userid)
                    ->get();
        return view('pages.wishlist', compact('product'));
    }
}
