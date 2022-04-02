<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WrapperApiController extends Controller
{
    public function payment()
    {
        $json = Http::get('https://api-m.sandbox.paypal.com/v1/payments/payment/')->json();
        return response()->json($json);
    }
    
    public function invoice()
    {
        $json = Http::get('https://api-m.sandbox.paypal.com/v1/invoicing/invoices')->json();
        return response()->json($json);
    }

    public function listpayments()
    {
        $json = Http::get('https://api-m.sandbox.paypal.com/v1/payments')->json();
        return response()->json($json);
    }

    public function exepayments()
    {
        $json = Http::get('https://api-m.sandbox.paypal.com/v1/payments/payment/')->json();
        return response()->json($json);
    }
    public function order()
    {
        $json = Http::get('https://api-m.sandbox.paypal.com/v2/checkout/orders')->json();
        return response()->json($json);
    }
}
