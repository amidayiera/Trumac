<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class OrdersController extends Controller
{
    public function index(){
        $orders =DB::select('select * from carts');
        return view('orders',['orders'=>$orders]);
}
}