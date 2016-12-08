<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    
    
    //
    public function help(){
    	if(\Session::get('cart'))
    	{
    		$cart =\Session::get('cart');
    		return view('front.help')->with('cart',$cart);	
    	}
        return view('front.help');
    }
    
    public function welcome(){
    	if(\Session::get('cart'))
    	{
    		$cart =\Session::has('cart');
    		
    		return view('welcome')->with('cart',$cart);	
    	}
    	
        return view('welcome');
    }
    
    public function products(){
    	if(\Session::get('cart'))
    	{
    		$cart =\Session::get('cart');
    		return view('front.products')->with('cart',$cart);	
    	}
        return view('front.products');
    
    }
    
    public function contact(){
        if(\Session::get('cart'))
    	{
    		$cart =\Session::get('cart');
    		return view('front.contact')->with('cart',$cart);	
    	}
        return view('front.contact');
    }
    
    public function about(){
    	if(\Session::get('cart'))
    	{
    		$cart =\Session::get('cart');
    		return view('front.about')->with('cart',$cart);	
    	}
        return view('front.about');
    }
    public function about_association(){
    	if(\Session::get('cart'))
    	{
    		$cart =\Session::get('cart');
    		return view('front.about-association')->with('cart',$cart);	
    	}
        return view('front.about-association');
    }
    
    public function events(){
    	if(\Session::get('cart'))
    	{
    		$cart =\Session::get('cart');
    		return view('front.events')->with('cart',$cart);	
    	}
        return view('front.events');
    }
    
    public function section_products($section){
        
        $products = \App\Product::where('section',$section)->where('rest','>',0)->paginate(9);
        if(\Session::get('cart'))
    	{
    		$cart =\Session::get('cart');
    		return view('front.allproducts')
		->with('products',$products)
		->with('section',$section)
		->with('cart',$cart);
    	}
        
		return view('front.allproducts')
		->with('products',$products)
		->with('section',$section);
    }
    
    
    public function product_detail($section,$slug){
		
		$product = \App\Product::where('slug',$slug)->first();
		if($product){
			$product->sizes;
		}
		
		//dd($product);
		if(\Session::get('cart'))
    	{
    		$cart =\Session::get('cart');
    			return view('front.product_detail')
		->with('product',$product)
		->with('section',$section)
		->with('cart',$cart);	
    	}
		return view('front.product_detail')
		->with('product',$product)
		->with('section',$section);
		
	}
	public function search(Request $request){
		$word = $request->all();
		if(count($word)){
			if($word['word']!='')
			{
				
				$products = \App\Product::search($word['word'])->paginate(9);
	            /*$products= \App\Product::where('description','like','%'.$word['word'].'%')
	            ->where('rest','>',0)
	            ->paginate(9);*/
	        	$products->setPath('?word='.$word['word']);
	        	
	        	//dd($products);
	        	//dd($word['word']);
	        		if(\Session::get('cart'))
    				{
		    		$cart =\Session::get('cart');
		    		return view('front.allproducts')
		    		->with('products',$products)
		    		->with('section','search')
		    		->with('word',$word['word'])
		    		->with('cart',$cart);
    				}
	        	
	        	
				return view('front.allproducts')->with('products',$products)->with('section','search')->with('word',$word['word']);
		}
		else
		{
				return redirect()->route('products');
		}
		}
		else{
			return redirect()->route('products');
			
		}
		
	//$products=\App\Product::where('description','like','%'.$word['word'].'%')->paginate(9);
		
		
		
	}
    
    
   
    
    
    
    
    
}
