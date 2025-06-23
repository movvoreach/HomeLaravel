<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $total['total'] = '';
       return view('Product.product', $total);
    }
    public function save(Request $request)
    {
        // dd($request->all());
        $name = $request->product;
        $Qty = $request->qty;
        $price = $request->price;
        $dis = $request->dis;
        $total = ($price * $Qty / $dis) / 100;

        return view('Product.product',compact('total'));
    }
}
