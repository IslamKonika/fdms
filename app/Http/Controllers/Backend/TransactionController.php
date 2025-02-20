<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    
    public function transac(){
       
        return view('backend.transaction');
    }

   
    public function transacform(){
        return view('backend.transaction-form');
    }


    public function store(Request $request){
       
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',      
            'amount' => 'required|numeric|min:0', 
            'project_name'=>'required'   
        ]);

        if ($validator->fails()) {
            
            return redirect()->route('backend.transaction-form')
                             ->withErrors($validator)
                             ->withInput();
        }

     
        Transaction::create([
            'name' => $request->name,
            'amount' => $request->amount,
            'project_name'=>$request->project_name

        ]);

       
        return redirect()->route('backend.transaction')
                         ->with('success', 'Transaction added successfully!');
    }
}
