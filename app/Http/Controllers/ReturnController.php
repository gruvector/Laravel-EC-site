<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Order;

class ReturnController extends Controller
{
    public function ReturnRequest()
    {
        $order = Order::where('return_order', 1)->get();
        return view('admin.return.request', compact('order'));
    }

    public function ApprovedReturn($id)
    {
        Order::where('id', $id)->update(['return_order'=>2]);
        $notification = array(
            'message' => 'Order Return Success',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function AllRequest(){
        $order = Order::where('return_order', 2)->get();
        return view('admin.return.all', compact('order'));
    }
}
