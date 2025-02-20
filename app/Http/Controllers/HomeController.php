<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $transactions=Transaction::all();
        $product=Product::all();
        return view('welcome',compact('transactions'),compact('product'));
    }
}
