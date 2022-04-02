<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Wrapper extends Controller
{
   public function invoice(){
       $json=Http::get('https://api.sandbox.paypal.com/v1/invoicing/invoices')->json();

       return response()->json($json);
   }
}
