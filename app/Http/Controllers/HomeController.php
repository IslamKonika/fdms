<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){
        $transactions=Transaction::all();
        $product=Product::all();
        $transaction_sum = Transaction::select('name', 'email', DB::raw('SUM(amount) as total_amount'))
            ->groupBy('name', 'email')
            ->orderByDesc('total_amount')
            ->get();

        $station_sum = Transaction::select('station_name', 'email', DB::raw('SUM(station_amount) as total_amount'))
            ->groupBy('station_name', 'email')
            ->orderByDesc('total_amount')
            ->get();

         $total_sales = Transaction::sum('amount','station_amount');


        return view('welcome',compact('transactions','product','transaction_sum','total_sales','station_sum'));
    }




}
