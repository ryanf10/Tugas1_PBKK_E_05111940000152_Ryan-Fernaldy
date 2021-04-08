<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        $customers = DB::table('sales.customers')
                -> select('customer_id','first_name','last_name','phone','email','street','city','state','zip_code')
                -> where('customer_id','>=',261)
                -> where('customer_id','<=',280)
                -> get();
        return view('welcome',['customers' => $customers]);
    }
}
