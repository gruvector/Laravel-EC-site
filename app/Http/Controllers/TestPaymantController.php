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
        $price = $request->input('order_price');
        try {
            $charge = Charge::create([
                'amount' => $price,
                'currency' => 'jpy',
                'description' => 'Example Charge',
                'source' => $token,
            ]);

            return redirect()->route('order');
            
        } catch (\Exception $e) {
            // Handle payment error
            return redirect()->back()->with('message', $e->getMessage());
        }
    }

    public function payment_charge1(Request $request){   
        
        Stripe::setApiKey('sk_test_51OERDlJax9oIpgFhYjEKcq0vZFblnfiNTVDF6JavaJYcf8vIN2InO9YvIrr3fjCUkbPEm8rdIQvkoVqXqUMMik6n00xoX800OC');
        $token = $request->input('stripeToken');
        $price = $request->input('cart_price');
        try {
            $charge = Charge::create([
                'amount' => $price,
                'currency' => 'jpy',
                'description' => 'Example Charge',
                'source' => $token,
            ]);

            return redirect()->route('order');
            
        } catch (\Exception $e) {
            // Handle payment error
            return redirect()->back()->with('message', $e->getMessage());
        }
    }


}
