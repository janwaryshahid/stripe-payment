<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class CartController extends Controller
{
    public function buyNow(Request $request){
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $price = $request->product_price;

      $checkout=  $checkout_session = \Stripe\Checkout\Session::create([
            'success_url' => route('success'),
            'cancel_url' =>  route('cencle'),
            'mode' => 'payment',
            // 'automatic_tax' => ['enabled' => true],
            'line_items' => [
                [

                    'price_data'=>[
                        'currency'=>'USD',
                        'product_data'=>[
                            'name'=>$request->product_price,
                        ],
                        'unit_amount'=>$request->product_price*100
                    ],
                    'quantity'=>1
                ],

            ]
          ]);
          return redirect()->away($checkout->url);
    }


}
