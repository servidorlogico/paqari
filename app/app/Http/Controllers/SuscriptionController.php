<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

use Validator;

use App\Http\Requests;
use Alert;

class SuscriptionController extends Controller
{   
    
     protected function validator_store(array $data)
    {

        return Validator::make($data, [
           
            'email' => 'required|email|max:255|unique:suscriptions',
        ]);
    }
    
    
    public function suscription(Request $request){
    $data=$request->all();
    $this->validator_store($data)->validate();
    		\App\Suscription::create([
    				'email'=> $data['email']
    		]);

    		return redirect()->back();
    		
    }
    
    
    public function index(){
        
        $suscriptions =\App\Suscription::orderBy('created_at','DESC')->paginate(5);
        return view('suscription.index')->with('suscriptions',$suscriptions);
    }
    
    public function destroy($id){
    
    $suscriptor=    \App\Suscription::find($id);
    $suscriptor->delete();
    Alert::success('Se ha eliminado con Éxito!');
    return redirect()->route('suscrip.index');
        
    }
    
    
    public function search(Request $request)
    {
        $word =$request->all();
        $suscriptions=\App\Suscription::where('email','like','%'.$word['word'].'%')->paginate(5);
        $suscriptions->setPath('?word='.$word['word']);
        
        return view('suscription.index')
        ->with('suscriptions',$suscriptions);
        
        
    }

   

}
