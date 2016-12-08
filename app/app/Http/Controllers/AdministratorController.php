<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Redirector;
use Validator;
use Alert;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    
	///validaciones
	 protected function validator_store(array $data)
    {

        return Validator::make($data, [
            'dni' => 'required|integer|digits:8|unique:users',
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'telephone' => 'integer|digits:9',
            'address' => 'string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password'=>'required|confirmed|min:8',

        ]);
    }


	public function index(){

		if(\Auth::user()->type=='root'){
			$users = \App\User::where('type','admin')->paginate(5);
			$categories = \App\Category::orderBy('id')->get();

			return view('admin.index')->with('users',$users)->with('categories',$categories);
		}
		abort(503);
	}

	public function create()
	{
		if(\Auth::user()->type=='root'){
				$categories = \App\Category::orderBy('id')->get();
				return view('admin.create')->with('categories',$categories);				
		}
		abort(503);
	}

	public function store(Request $request ){

		$data = $request->all();
		$this->validator_store($data)->validate();
		\App\User::create([
			'dni'=>$data['dni'],
			'name'=>$data['name'],
			'lastname'=>$data['lastname'],
			'telephone'=>$data['telephone'],
			'address'=>$data['address'],
			'email'=>$data['email'],
			'password'=>bcrypt($data['password']),
			'type'=>'admin'

			]);
		Alert::success('Se ha creado con èxito!');
		return redirect()->route('admin.index');
	}

	public function edit($id){
		if(\Auth::user()->id==$id){
			$user = \App\User::find($id);
			$categories = \App\Category::orderBy('id')->get();
			return view('admin.edit')->with('user',$user)->with('categories',$categories);
		}
		abort(503);
		
	}


	public function update(Request $request, $id){

		
	}
	public function destroy($id){
		
		$user = \App\User::find($id);
		$this->error($user);
		if(\Auth::user()->type=='root'){
			$user->delete();
			Alert::success('Se ha eliminado al usuario!');
			return redirect()->route('admin.index');
		}
		abort(503);
	}

	public function show($id){
		$user = \App\User::find($id);
		$categories = \App\Category::orderBy('id')->get();
		return view('admin.show')->with('user',$user)->with('categories',$categories);
		
	}


}
