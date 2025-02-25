<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function dashboard(){
        $transaction_sum = Transaction::select('name', 'email', DB::raw('SUM(amount) as total_amount'))
            ->groupBy('name', 'email')
            ->orderByDesc('total_amount')
            ->get();
        return view('backend.dashboard',compact('transaction_sum'));
    }

    public function edit($id){

        $transaction=Transaction::find($id);
        return view('backend.transaction-edit',compact('transaction'));

    }


    public function Update(Request $request,$id)
    {
       //Validation



       $transaction=Transaction::find($id);
       $transaction->Update([
       'name'=>$request->name,
       'amount'=>$request->amount,
       'project_name'=>$request->project_name


       ]);

       return redirect()->route('backend.dashboard');



    }
}
