<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function display(Request $request){
        $product = $request->product;
        $price = $request->price;
        $percent = $request->percent;
        $discountAmount = $price * $percent / 100;
        $discountPrice = $price - $discountAmount;
        return view('result', compact('product', 'price', 'percent', 'discountAmount', 'discountPrice'));
    }
}
