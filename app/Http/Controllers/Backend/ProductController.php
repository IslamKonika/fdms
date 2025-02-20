<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
   public function product(){

    $products=Product::all();

    return view('backend.product',compact('products'));
   }
   public function form(){
    return view('backend.product-form');
   }

   public function store(Request $request){

    // dd($request->all());
    $validator = Validator::make($request->all(), [
        'pro_name' => 'required|string|max:255',      
        'price' => 'required|numeric|min:0', 
        'image'=>'required'   
    ]);

    if ($validator->fails()) {
        
        return redirect()->route('backend.product-form')
                         ->withErrors($validator)
                         ->withInput();
    }

   

    $fileName = "";

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = date('YmdHis') . '.' . $file->getClientOriginalExtension();
        
        // Store in the public/images directory
        $file->move(public_path('uploads/images'), $fileName);
    }
// dd($fileName);
    Product::create([
        'product_name' => $request->pro_name,
        'price' => $request->price,
        'image'=>$fileName

    ]);

   
    return redirect()->route('backend.product')
                     ->with('success', 'product added successfully!');
}

}
