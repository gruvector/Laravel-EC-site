<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\Payment;
use Carbon\Carbon;
use DateTime;
use DateInterval;
use DatePeriod;

class TestPaymantController extends Controller
{
    public function payment_charge(Request $request){   
        
        Stripe::setApiKey('sk_test_51OERDlJax9oIpgFhYjEKcq0vZFblnfiNTVDF6JavaJYcf8vIN2InO9YvIrr3fjCUkbPEm8rdIQvkoVqXqUMMik6n00xoX800OC');
        $token = $request->input('stripeToken');
        try {
            $charge = Charge::create([
                'amount' => '300',
                'currency' => 'jpy',
                'description' => 'Example Charge',
                'source' => $token,
            ]);
            return redirect()->route('cart');
            
        } catch (\Exception $e) {
            // Handle payment error
            return redirect()->back()->with('message', $e->getMessage());
        }
    }

    
    public function get_point_month($point_date){
        if(!Auth::check()) return redirect()->route('_login');
        if(Auth::user()->user_role != 1) return redirect()->route('home');

        $converted_point_date = Carbon::parse($point_date);
        $start_date = date('Y-m-d', strtotime("{$converted_point_date} -12 months"));
        $end_date = date('Y-m-d', strtotime("{$converted_point_date} +0 months"));
        $points = [];
        $totals = [];
        $begin = new DateTime( $start_date );
        $end = new DateTime( $end_date );
        $end = $end->modify( '+1 day' ); 

        $interval = new DateInterval('P1M');
        $daterange = new DatePeriod($begin, $interval ,$end);

        foreach($daterange as $item){
            $month_str = $item->format("m");
            $year_str = $item->format("Y");
            $point_str = $year_str . '-' . $month_str;
            $payments = Payment::whereYear('created_at', '=', $year_str)
                    ->whereMonth('created_at', '=', $month_str)
                    ->get();

            if(sizeof($payments) < 1){
                $totals[$point_str] = 0;
            }
            else{
                foreach ($payments as $payment) {
                    if(!isset($totals[$point_str])){
                        $totals[$point_str] = 0;
                    }
                        $totals[$point_str] += $payment->price;
                    }   
            }


        }
        $point_date = Carbon::parse($point_date)->format('Y-m');
        foreach($totals as $key=>$price){
            if($key == $point_date){
                $dis_price = $price;
            }
        }
        return view('admin.status_month', ['totals'=>$totals, 'dis_price'=>$dis_price,]);
    }


    public function get_point_month_chart(Request $request){
        if(!Auth::check()) return redirect()->route('_login');
        if(Auth::user()->user_role != 1) return redirect()->route('home');

        $point_date = $request->point_date;
        $converted_point_date = Carbon::parse($point_date);
        $start_date = date('Y-m-d', strtotime("{$converted_point_date} -6 months"));
        $end_date = date('Y-m-d', strtotime("{$converted_point_date} +6 months"));
        $points = [];
        $totals = [];
        $begin = new DateTime( $start_date );
        $end = new DateTime( $end_date );
        $end = $end->modify( '+1 day' ); 

        $interval = new DateInterval('P1M');
        $daterange = new DatePeriod($begin, $interval ,$end);

        foreach($daterange as $item){
            $month_str = $item->format("m");
            $year_str = $item->format("Y");
            $point_str = $year_str . '-' . $month_str;
            $payments = Payment::whereYear('created_at', '=', $year_str)
                    ->whereMonth('created_at', '=', $month_str)
                    ->get();

            if(sizeof($payments) < 1){
                $totals[$point_str] = 0;
            }
            else{
                foreach ($payments as $payment) {
                    if(!isset($totals[$point_str])){
                        $totals[$point_str] = 0;
                    }
                        $totals[$point_str] += $payment->price;
                    }   
            }
        }

        $p_points = [];

        foreach($totals as $key=>$total){
            array_push($p_points, (object)[
                'x' => $key,
                'y' => $total,
            ]);           
        }
        $point_date = Carbon::parse($point_date)->format('Y-m');
        foreach($totals as $key=>$price){
            if($key == $point_date){
                $dis_price = $price;
            }
        }
        return ['p_points'=>$p_points, 'dis_price'=>$dis_price,];
    }


    public function get_point_date($point_date){
        if(!Auth::check()) return redirect()->route('_login');
        if(Auth::user()->user_role != 1) return redirect()->route('home');

        $converted_point_date = Carbon::parse($point_date);
        $start_date = date('Y-m-d', strtotime("{$converted_point_date} -15 days"));
        $end_date = date('Y-m-d', strtotime("{$converted_point_date} +0 days"));
        $points = [];
        $totals = [];
        $begin = new DateTime( $start_date );
        $end = new DateTime( $end_date );
        $end = $end->modify( '+1 day' ); 

        $interval = new DateInterval('P1D');
        $daterange = new DatePeriod($begin, $interval ,$end);
        foreach($daterange as $item){
            $day_str = $item->format("d");
            $month_str = $item->format("m");
            $year_str = $item->format("Y");
            $point_str = $year_str . '-' . $month_str . '-' . $day_str;
            $payments = Payment::whereYear('created_at', '=', $year_str)
            ->whereMonth('created_at', '=', $month_str)
            ->whereDay('created_at', '=', $day_str)
            ->get();
            
            if(sizeof($payments) < 1){
                $totals[$point_str] = 0;
            }
            else{
                foreach ($payments as $payment) {
                    if(!isset($totals[$point_str])){
                        $totals[$point_str] = 0;
                    }
                    $totals[$point_str] += $payment->price;
                }   
            }
        }
        foreach($totals as $key=>$price){
            if($key == $point_date){
                $dis_price = $price;
            }
        }
        
        return view('admin.status_day', ['totals'=>$totals, 'dis_price'=>$dis_price,]);
    }

    
    public function get_point_date_chart(Request $request){
        if(!Auth::check()) return redirect()->route('_login');
        if(Auth::user()->user_role != 1) return redirect()->route('home');

        $point_date = $request->point_date;// dd($point_date);
        $converted_point_date = Carbon::parse($point_date);
        $start_date = date('Y-m-d', strtotime("{$converted_point_date} -7 days"));
        $end_date = date('Y-m-d', strtotime("{$converted_point_date} +7 days"));
        $points = [];
        $totals = [];
        $begin = new DateTime( $start_date );
        $end = new DateTime( $end_date );
        $end = $end->modify( '+1 day' ); 

        $interval = new DateInterval('P1D');
        $daterange = new DatePeriod($begin, $interval ,$end);
        foreach($daterange as $item){
            $day_str = $item->format("d");
            $month_str = $item->format("m");
            $year_str = $item->format("Y");
            $point_str = $year_str . '-' . $month_str . '-' . $day_str;
            $payments = Payment::whereYear('created_at', '=', $year_str)
            ->whereMonth('created_at', '=', $month_str)
            ->whereDay('created_at', '=', $day_str)
            ->get();
            
            if(sizeof($payments) < 1){
                $totals[$point_str] = 0;
            }
            else{
                foreach ($payments as $payment) {
                    if(!isset($totals[$point_str])){
                        $totals[$point_str] = 0;
                    }
                    $totals[$point_str] += $payment->price;
                }   
            }
        }
        $p_points = [];
        foreach($totals as $key=>$total){
            array_push($p_points, (object)[
                'x' => $key,
                'y' => $total,
            ]);           
        }
        foreach($totals as $key=>$price){
            if($key == $point_date){
                $dis_price = $price;
            }
        }
        return ['p_points'=>$p_points, 'dis_price'=>$dis_price];
    }
}
