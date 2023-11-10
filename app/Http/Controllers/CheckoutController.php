<?php

namespace App\Http\Controllers;

use Auth;
use Cart;
use DB;
use Illuminate\Http\Request;
use Session;

class CheckoutController extends Controller
{
    public function checkout()
    {
        if (Auth::Check()) {
            $cart = Cart::content();
            return view('pages.checkout', compact('cart'));
        } else {
            $notification = array(
                'message' => 'Login Your Account First',
                'alert-type' => 'error',
            );
            return redirect()->route('login')->with($notification);
        }
    }

    public function applycoupon(Request $request)
    {
        $coupon = $request->coupon;
        $check = DB::table('coupons')->where('coupon', $coupon)->first();
        if ($check) {
            Session::put('coupon', [
                'name' => $check->coupon,
                'discount' => $check->discount,
                'balance' => Cart::Subtotal() - $check->discount,
            ]);
            $notification = array(
                'message' => 'Successfully Coupon Add',
                'alert-type' => 'success',
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Invalid Coupon',
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notification);
        }
    }

    public function couponremove()
    {
        Session::forget('coupon');
        $notification = array(
            'message' => 'Coupon Remove Successfully',
            'alert-type' => 'error',
        );
        return redirect()->back()->with($notification);
    }

    public function paymentpage (){
        $cart= Cart::Content();
        return view('pages.payment', compact('cart'));
    }

}
