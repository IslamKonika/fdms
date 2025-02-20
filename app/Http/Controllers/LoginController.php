<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function registration(){
        $customers=Customer::all();
        return view('registration',compact('customers'));
    }

    public function store(Request $request){
        $validation=Validator::make($request->all(),[
            'name'=>'required|max:255',
            'email'=>'required',
            'phone_number'=>'required|max:15',
            'password'=>'required|min:6|confirmed',
            'address'=>'required|max:255'

        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        Customer::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'password'=>bcrypt($request->password),
            'address'=>$request->address


        ]);

        return redirect()->route('home');
    }

    public function sto(Request $request){

        // dd($request->all());

    // validation
    $validation=Validator::make($request->all(),
    [
         'email'=>'required|email',
         'password'=>'required|min:6'


    ]);

    // login er kaj start

    $form_data=$request->except('_token');
    // dd($form_data);

    $check=Auth('customerGuard')->attempt($form_data);
    
     if($check)
     {

       
        return redirect()->route('home');
     }

     else
     {
         return redirect()->back();
     }
    }

    public function logout(){

        auth('customerGuard')->logout();
        session()->forget('basket');
        return redirect()->route('home')->with('success', 'Logout successful!');

    }
   
}
