<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $customers = DB::table('sales.customers')
                -> select('customer_id','first_name','last_name','phone','email','street','city','state','zip_code')
                -> where('customer_id','>=',261)
                -> where('customer_id','<=',280)
                -> get();
    return view('welcome',["customers" => $customers]);
});


