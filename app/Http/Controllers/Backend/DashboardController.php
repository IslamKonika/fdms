<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $transactions=Transaction::all();
        return view('backend.dashboard',compact('transactions'));
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
