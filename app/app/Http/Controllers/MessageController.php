<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Validator;
use Alert;
class MessageController extends Controller
{
    //// validador
     protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'content'=>'required|min:20|max:400',
            

        ]);
    }

    
    //enviar
     public function send_menssage(Request $request)
    {
    	$data = $request->all();	
    	$this->validator($data)->validate();
    	\App\Message::create([
    	    'name'=>$data['name'],
    	    'lastname'=>$data['lastname'],
    	    'email'=>$data['email'],
    	    'content'=>$data['content']
    	    ]);
    return redirect()->route('contact');
    }
    
    public function index(){
        $messages = \App\Message::orderBy('created_at','DESC')->paginate(5);
        return view('message.index')->with('messages',$messages);
    }
    
    public function show($id){
        $message= \App\Message::find($id);
        return view('message.show')->with('message',$message);
    }
    
    public function destroy($id){
        $message = \App\Message::find($id);
        $message->delete();
        Alert::success('Se ha eliminado con Éxito');
        return redirect()->route('msg.index');
    }
    //mostrar mensages
    
    public function search(Request $request)
    {
        $word=$request->all();
        $messages=\App\Message::where('email','like','%'.$word['word'].'%')
        ->orWhere('name','like','%'.$word['word'].'%')
        ->orWhere('lastname','like','%'.$word['word'].'%')->paginate(5);
        $messages->setPath('?word=',$word['word']);
        
        return view('message.index')
        ->with('messages',$messages);
        
        
    }
    
    // eliminar mensages
    
    
    
}
