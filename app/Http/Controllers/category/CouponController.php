<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Coupon;

class CouponController extends Controller
{
    public function index()
    {
        $coupon = Coupon::all();
        return view('admin.coupon.coupon', compact('coupon'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'coupon' => 'required|unique:coupons|max:255',
            'discount' => 'required|unique:coupons|max:255',
        ]);

        $coupon = new Coupon();
        $coupon->coupon = $request->coupon;
        $coupon->discount = $request->discount;
        $coupon->save();
        $notification = array(
            'message' => 'Coupon Successfully Add',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    }

    public function edit($id)
    {
        $edit_coupon = Coupon::findorfail($id);
        return view('admin.coupon.edit', compact('edit_coupon'));
    }

    public function update(Request $request, $id)
    {

        $coupon = Coupon::findorfail($id);
        $coupon->coupon = $request->coupon;
        $coupon->discount = $request->discount;
        $coupon->save();
        $notification = array(
            'message' => 'Coupon Successfully Update',
            'alert-type' => 'success',
        );

        return redirect()->route('coupon')->with($notification);
    }

    public function destroy($id)
    {
        $deletecoupon = Coupon::findorfail($id);
        $deletecoupon->delete();
        $notification = array(
            'message' => 'Coupon Successfully Delete',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
}
