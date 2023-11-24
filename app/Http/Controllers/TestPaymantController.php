<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\Payment;
use App\Models\Order;
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
            
    
            $form = new Order;
            $form->order_name = $request->input('cart_name');
            $form->order_email = $request->input('cart_email');
            $form->order_phone = $request->input('cart_tel');
            $form->order_zipcode = $request->input('cart_zipcode');
            $form->order_province = $request->input('cart_province');
            $form->order_city = $request->input('cart_city');
            $form->order_address = $request->input('cart_address');
            $form->save();
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
        $aaa = Shipping::find(1);
        dd($aaa);
        try {
            $charge = Charge::create([
                'amount' => $price,
                'currency' => 'jpy',
                'description' => 'Example Charge',
                'source' => $token,
            ]);

            $ship = new Shipping;
            $ship->ship_name = $request->input('cart_name');
            $ship->ship_email = $request->input('cart_email');
            $ship->ship_phone = $request->input('cart_tel');
            $ship->ship_province = $request->input('cart_province');
            $ship->ship_city = $request->input('cart_city');
            $ship->ship_address = $request->input('cart_address');
            $ship->save();
            return redirect()->route('EC-intro');
            
        } catch (\Exception $e) {
            // Handle payment error
            return redirect()->back()->with('message', $e->getMessage());
        }
    }


}
