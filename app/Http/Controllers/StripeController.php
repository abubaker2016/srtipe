<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use Stripe;
use Session;

class StripeController extends Controller
{
    public function index($id){

        try{

            //echo env('STRIPE_SECRET_KEY'); exit; 
            $data   = Product::findOrFail($id);
            //echo '<pre>'; print_r($data->price); exit; 
            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY')); 
            $APP_URL = env('APP_URL');  
            $checkout_session = \Stripe\Checkout\Session::create([
              'payment_method_types' => ['card'],
                'line_items' => [[
                  'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                      'name' => $data->name,
                    ],
                    'unit_amount' => $data->price*100,
                  ],
                  'quantity' => 1,
                ]],
              'mode' => 'payment',
              'success_url' => $APP_URL . 'success',
              'cancel_url' => $APP_URL . 'cancel',
            ]);
             return Redirect($checkout_session->url);

        }catch(\Exception $e){
            //return response()->view('errors.custom', [], 404);  //this page under construction
        }
       
    }

    public function success(){
        return view("stripe.success");
    }
    public function cancel(){
        return view("stripe.cancel");
    }
}
