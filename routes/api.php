<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/payments/payment/',[\App\Http\Controllers\Wrapper::class, 'payment'])->name('payment')-> middleware('npm');
Route::get('/v1/invoicing/invoices',[\App\Http\Controllers\Wrapper::class, 'invoice'])->name('invoice')-> middleware('npm');
Route::get('/v1/payments',[\App\Http\Controllers\Wrapper::class, 'listpayments'])->name('listpayments')-> middleware('npm');
Route::get('/v1/payments/payment/',[\App\Http\Controllers\Wrapper::class, 'exepayments'])->name('exepayments')-> middleware('npm');
Route::get('v2/checkout/orders',[\App\Http\Controllers\Wrapper::class, 'order'])->name('order');
Route::get('/user/identitas', function (){
    return [
        'code' => '0',
        'data' => [
            'npm'=>'197006023',
            'nama'=>'Dzikri Ahmad Maulid',
            'email'=>'197006023@student.unsil.ac.id'
        ]
    ];
})-> middleware('npm');