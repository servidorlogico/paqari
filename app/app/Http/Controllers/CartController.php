<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Validator;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    
    // validator
     protected function validator(array $data)
    {
        return Validator::make($data, [
                'quantity'=>'required|integer|min:1',
        ]);
    }
    
    public function __construct()
    {
        if(!\Session::has('cart')) \Session::put('cart',array());
            
    }
    
    
    
    //
    
    ///show
    public function show(){
        $cart = \Session::get('cart');
        return  view('front.cart')->with('cart',$cart);
    }
    
    
    ///add item
    public function add(Request $request,$slug){
        //dd($request->all());
        $data= $request->all();
        $this->validator($data)->validate();
        $product = \App\Product::where('slug',$slug)->first();
        $product->quantity=$data['quantity'];
        $cart = \Session::get('cart');
        $cart[$product->slug]= $product;
        \Session::put('cart',$cart);
        return redirect()->back();
    }
    
    
    //// delete item
    
    public function delete($slug){
        $cart = \Session::get('cart');
        unset($cart[$slug]);
        \Session::put('cart',$cart);
        return redirect()->route('cart.show');
    }
    
    public function delete_cart()
    {
            if(\Session::has('cart'))\Session::forget('cart');
            return  redirect()->route('cart.show');
        
    }
    
    
    public function facturaction()
    {
        if(\Session::get('cart'))
        {
            $cart = \Session::get('cart');
            return view('front.fact')->with('cart',$cart);
        }
        
        return view('front.fact');
    }
    
    /// update item
    
    /// delte all
    
}
