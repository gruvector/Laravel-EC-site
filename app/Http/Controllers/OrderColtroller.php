<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Notifications\OrderNotification;
use Auth;
use DB;
use Illuminate\Http\Request;

class OrderColtroller extends Controller
{
    public function neworder()
    {
        $order = Order::where('status', 0)->get();
        return view('admin.order.pending', compact('order'));
    }

    public function vieworder($id)
    {
        $order = DB::table('orders')
            ->join('users', 'orders.user_id', 'users.id')
            ->select('orders.*', 'users.name', 'users.phone')
            ->where('orders.id', $id)
            ->first();

        $shipping = DB::table('shipping')->where('order_id', $id)->first();

        $details = DB::table('orders_details')
            ->join('products', 'orders_details.product_id', 'products.id')
            ->select('orders_details.*', 'products.*')
            ->where('orders_details.order_id', $id)
            ->get();

        return view('admin.order.view_order', compact('order', 'shipping', 'details'));
    }

    public function paymentaccept($id)
    {
        Order::where('id', $id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Payment Accept Done',
            'alert-type' => 'success',
        );

        return redirect()->route('new.order')->with($notification);
    }

    public function paymentcancel($id)
    {
        Order::where('id', $id)->update(['status' => 4]);
        $notification = array(
            'message' => 'Order Cancel',
            'alert-type' => 'error',
        );

        return redirect()->route('new.order')->with($notification);
    }

    public function acceptorder()
    {
        $order = Order::where('status', 1)->get();
        return view('admin.order.pending', compact('order'));
    }

    public function cancelorder()
    {
        $order = Order::where('status', 4)->get();
        return view('admin.order.pending', compact('order'));
    }

    public function processorder()
    {
        $order = Order::where('status', 2)->get();
        return view('admin.order.pending', compact('order'));
    }

    public function deliveryorder()
    {
        $order = Order::where('status', 3)->get();
        return view('admin.order.pending', compact('order'));
    }

    public function processdelivery($id)
    {
        Order::where('id', $id)->update(['status' => 2]);
        $notification = array(
            'message' => 'Sent to Process Delivery',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.accept.order')->with($notification);
    }

    public function deliverydone($id)
    {
        $product = DB::table('orders_details')->where('order_id', $id)->get();
        foreach ($product as $row) {
            DB::table('products')
                ->where('id', $row->product_id)
                ->update(['product_quantity' => DB::raw('product_quantity -' . $row->quantity)]);
        }

        Order::where('id', $id)->update(['status' => 3]);
        $notification = array(
            'message' => 'Product Delivery Done',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.delivery.order')->with($notification);
    }

    public function ordertracking(Request $request)
    {
        $code = $request->code;
        $track = Order::where('status_code', $code)->first();

        if ($track) {
            return view('pages.tracking', compact('track'));
        } else {
            $notification = array(
                'message' => 'Status code is invaild',
                'alert-type' => 'error',
            );

            return redirect()->back()->with($notification);
        }

    }

    public function ReturnOrder()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $order = Order::where('status', 3)->orderBy('id', 'DESC')->get();
        return view('admin.order.return_order', compact('user', 'order'));
    }

    public function RequestReturn($id)
    {
        Order::where('id', $id)->update(['return_order' => 1]);
        $notification = array(
            'message' => 'Order Request Done',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
}
