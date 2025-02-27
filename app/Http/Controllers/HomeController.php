<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function home(){

        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        $transactions=Transaction::whereMonth('created_at', $currentMonth)
                                    ->whereYear('created_at', $currentYear)
                                    ->get();
        $product=Product::all();

        $transaction_sum = Transaction::select('name', 'email', DB::raw('SUM(amount) as total_amount'))
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->groupBy('name', 'email')
            ->orderByDesc('total_amount')
            ->get();

        $station_sum = Transaction::select('station_name', 'email', DB::raw('SUM(amount) as total_amount'))
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->groupBy('station_name', 'email')
            ->orderByDesc('total_amount')
            ->get();

        $total_sales = Transaction::
                                whereMonth('created_at', $currentMonth)
                                ->whereYear('created_at', $currentYear)
                                ->sum('amount');


        return view('welcome',compact('transactions','product','transaction_sum','total_sales','station_sum'));
    }




}
