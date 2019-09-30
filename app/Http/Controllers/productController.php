<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class productController extends Controller
{
    public function index(){
        $images="images";
        $samples= DB::select('select * from products');
        return view('index',['samples'=>$samples]);
    }
    public function showProducts(){
        $bottles=DB::select('select * from products');
        return view('products',['bottles'=>$bottles]);
    }
    public function showProductsById($id){
       
       $details = DB::table('products')->where('productID', $id)->get();
       return view('prodMaster',['details'=>$details]);

    }
}
