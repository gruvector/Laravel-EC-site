<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class ReportController extends Controller
{
    public function todayorder()
    {
        $today = date('d-m-y');
        $order = Order::where('status', 1)->where('date', $today)->get();
        return view('admin.report.today_delivery', compact('order'));
    }

    public function todaydeliver()
    {
        $today = date('d-m-y');
        $order = Order::where('status', 3)->where('date', $today)->get();
        return view('admin.report.today_delivery', compact('order'));
    }

    public function thismonth()
    {

        $month = date('F');
        $order = Order::where('status', 3)->where('month', $month)->get();
        return view('admin.report.this_month', compact('order'));
    }

    public function search()
    {
        return view('admin.report.search');
    }

    public function searchByDate(Request $request)
    {
        $date = $request->date;
        $newdate = date('d-m-y', strtotime($date));
        $total = Order::where('status', 3)->where('date', $newdate)->sum('total');
        $order = Order::where('status', 3)->where('date', $newdate)->get();
        return view('admin.report.search_date', compact('order', 'total'));
    }

    public function searchByMonth(Request $request)
    {
        $month = $request->month;
        $total = Order::where('status', 3)->where('month', $month)->sum('total');
        $order = Order::where('status', 3)->where('month', $month)->get();
        return view('admin.report.search_month', compact('order', 'total'));
    }

    public function searchByYear(Request $request)
    {
        $year = $request->year;
        $total = Order::where('status', 3)->where('year', $year)->sum('total');
        $order = Order::where('status', 3)->where('year', $year)->get();
        return view('admin.report.search_year', compact('order', 'total'));
    }

    public function downloadreport()
    {
        $order = Order::where('status', 3)->first();
        $details = DB::table('orders_details')
            ->join('products', 'orders_details.product_id', 'products.id')
            ->select('orders_details.*', 'products.*')
            ->get();

        return view('admin.report.download_report', compact('order', 'details'));
    }
}
