<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector; /// clase que redirige a rutas
use Alert;
use Validator; /// clase para validar
use Carbon\Carbon; /// clase que maneja tiempo
class ProductController extends Controller
{

	//validaciones
	 protected function validator_store(array $data)
    {

        return Validator::make($data, [
            'slug' => 'required|unique:products|max:255|min:4',
            'name' => 'required|max:255|min:4',
            'description'=>'required|max:255',
            'price'=>'required|numeric',
            'section'=>'required',
            'stock'=>'required|integer',
            'category_id' => 'required| min:1',
            'url_1'=>'required|image',
            'url_2'=>'required|image',
            'url_3'=>'required|image',
            
        ]);
    }
     protected function validator_update(array $data)
    {

        return Validator::make($data, [
            'slug' => 'required|max:255|min:4',
            'name' => 'required|max:255|min:4',
            'description'=>'required|max:255',
            'price'=>'required|numeric',
            'section'=>'required',
            'stock'=>'required|integer',
            'category_id' => 'required| min:1',
            'url_1'=>'image',
            'url_2'=>'image',
            'url_3'=>'image',
            
        ]);
    }




    public function index(){

    	
    	$products = \App\Product::paginate(5);
		return view('product.index')
		->with('products',$products);
	}

	public function create(){
		$categories = \App\Category::all()->pluck('name','id');
		$sizes = \App\Size::all();
		return view('product.create')
		->with('categories',$categories)
		->with('sizes',$sizes);

	}

	public function store(Request $request ){

		//dd($request->all());
		$data = $request->all();
		//dd($data);
		$data['slug']= str_replace(" ","-", $data['slug']);

		$this->validator_store($data)->validate();
		$name1='jssmy_'.Carbon::now().$data['url_1']->getClientOriginalName();
		$name2='jssmy_'.Carbon::now().$data['url_2']->getClientOriginalName();
		$name3='jssmy_'.Carbon::now().$data['url_3']->getClientOriginalName();
	//	dd($data);
		$product= \App\Product::create([
			'slug'=>$data['slug'],
			'name'=>$data['name'],
			'description'=>$data['description'],
			'price'=>$data['price'],
			'stock'=>$data['stock'],			
			'rest'=>$data['stock'],
			'section'=>$data['section'],
			'category_id'=>$data['category_id'],
			'url_1'=>$name1,
			'url_2'=>$name2,
			'url_3'=>$name3,


			]);
		\Storage::disk('local')->put($name1,\File::get($request['url_1']));
		\Storage::disk('local')->put($name2,\File::get($request['url_2']));
		\Storage::disk('local')->put($name3,\File::get($request['url_3']));
		if($data['category_id']==1){
			if(isset($data['XS'])){
				$size = \App\Size::find($data['XS']);
				$product->sizes()->save($size);
			}
			if(isset($data['S'])){
				$size = \App\Size::find($data['S']);
				$product->sizes()->save($size);
			}
			if(isset($data['M'])){
				$size = \App\Size::find($data['M']);
				$product->sizes()->save($size);
			}
			if(isset($data['L'])){
				$size = \App\Size::find($data['L']);
				$product->sizes()->save($size);
			}
			if(isset($data['XL'])){
				$size = \App\Size::find($data['XL']);
				$product->sizes()->save($size);
			}

		} 
		 
		
		Alert::success('Se a agregado nuevo producto');
		return redirect()->route('product.index');
	}

	public function edit($slug){

		$product = \App\Product::where('slug',$slug)->first();
		$product->sizes;
		$product->category;
		$sizes = \App\Size::all();
		$categories = \App\Category::all();
		$c= $categories->find($product->category->id);
		$c['select']=true;
		
		foreach ($sizes as $size) {
			$size['check']=false;	
			foreach ($product->sizes as $s) {
					if($size->id == $s->id){
						$size['check']=true;
							
					}
					

			}
		}
		

		return view('product.edit')
		->with('product',$product)
		->with('sizes',$sizes)
		->with('categories',$categories);

		
	}


	public function update(Request $request, $id){
		$data = $request->all();
	
		$data['slug']= str_replace(" ","-", $data['slug']); // fformateamos el slug

		$this->validator_update($data)->validate(); //validation
		$product =\App\Product::find($id);/// encontramos prodcuto
		$product->sizes;
		///ccambios de imagen
		if(isset($data['url_1']))
		{
			$name1='jssmy_'.Carbon::now().$data['url_1']->getClientOriginalName();
			$product->url_1 = $name1;
			\Storage::disk('local')->put($name1,\File::get($request['url_1']));

		}
		if(isset($data['url_2'])){
			$name2='jssmy_'.Carbon::now().$data['url_2']->getClientOriginalName();	
			$product->url_2 = $name2;
			\Storage::disk('local')->put($name2,\File::get($request['url_2']));
		}
		if(isset($data['url_3'])){
			$name3='jssmy_'.Carbon::now().$data['url_3']->getClientOriginalName();
			$product->url_3 = $name3;
			\Storage::disk('local')->put($name3,\File::get($request['url_3']));
		}
		///cambios de atributos del producto
		
		$product->slug =$data['slug'];
		$product->name = $data['name'];
		$product->description =$data['description'];
		$product->price = $data['price'];
		$product->stock =$data['stock'];
		
		
		$product->section = $data['section'];
		$product->category_id = $data['category_id'];
		$product->save();
		
		/// validatomos tallas
			if($data['category_id']==1){
				///
			if(isset($data['XS']))
			{
				//verfifica que la rrlacion no haya sido establecido antes
				$s= $product->sizes()->find($data['XS']);
				if(!$s){
					$size = \App\Size::find($data['XS']);
					///establece relacion en caso que no haya sido antes
					$product->sizes()->save($size);
				}
				
			}
			else{
				//remueve relacion
				$s= $product->sizes()->where('size','XS')->first();
				if($s){
					//remueve relacon que haa sido estableido antes
					$product->sizes()->detach($s->id);
				}
			}
			///

			if(isset($data['S']))
			{
				//verfifica que la rrlacion no haya sido establecido antes
				$s= $product->sizes()->find($data['S']);
				if(!$s){
					$size = \App\Size::find($data['S']);
					///establece relacion en caso que no haya sido antes
					$product->sizes()->save($size);
				}
				
			}
			else{
				//remueve relacion
				$s= $product->sizes()->where('size','S')->first();
				if($s){
					//remueve relacon que haa sido estableido antes
					$product->sizes()->detach($s->id);
				}
			}

			////
			if(isset($data['M']))
			{
				//verfifica que la rrlacion no haya sido establecido antes
				$s= $product->sizes()->find($data['M']);
				if(!$s){
					$size = \App\Size::find($data['M']);
					///establece relacion en caso que no haya sido antes
					$product->sizes()->save($size);
				}
				
			}
			else{
				//remueve relacion
				$s= $product->sizes()->where('size','M')->first();
				if($s){
					//remueve relacon que haa sido estableido antes
					$product->sizes()->detach($s->id);
				}
			}
			///
			if(isset($data['L']))
			{
				//verfifica que la rrlacion no haya sido establecido antes
				$s= $product->sizes()->find($data['L']);
				if(!$s){
					$size = \App\Size::find($data['L']);
					///establece relacion en caso que no haya sido antes
					$product->sizes()->save($size);
				}
				
			}
			else{
				//remueve relacion
				$s= $product->sizes()->where('size','L')->first();
				if($s){
					//remueve relacon que haa sido estableido antes
					$product->sizes()->detach($s->id);
				}
			}
			///
			if(isset($data['XL']))
			{
				//verfifica que la rrlacion no haya sido establecido antes
				$s= $product->sizes()->find($data['XL']);
				if(!$s){
					$size = \App\Size::find($data['XL']);
					///establece relacion en caso que no haya sido antes
					$product->sizes()->save($size);
				}
				
			}
			else{
				//remueve relacion
				$s= $product->sizes()->where('size','XL')->first();
				if($s){
					//remueve relacon que haa sido estableido antes
					$product->sizes()->detach($s->id);
				}
			}


		}
		else{
			foreach ($product->sizes as $s) {
				$product->sizes()->detach($s->id);
			}
		}
		 
		
		Alert::success('Se a editado con producto');
		return redirect()->route('product.index');
			
			

		}
	public function destroy($id){
		$product = \App\Product::find($id);
		$product->delete();
		Alert::success('Se ha eliminado registro');
		return redirect()->route('product.index');
		
	}

	public function show($slug){
		$product =\App\Product::where('slug',$slug)->first();
		$product->category;
		$product->sizes;

		return view('product.show')
		->with('product',$product);
		
	}
	
	
	public function search(Request $request){
		$word =$request->all();
		$products=\App\Product::where('slug','like','%'.$word['word'].'%')
		->orWhere('name','like','%'.$word['word'].'%')
		->paginate(5);
		$products->setPath('?word=',$word['word']);
		return view('product.index')->with('products',$products);
		
		
		
	}
	
	///////////////
	
	
	


	
	
	

}
