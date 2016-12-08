<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['slug','name','description','category_id','price','stock','section','rest','url_1','url_2','url_3'];
    public $timestamps = false;


    public function category(){

    	return $this->belongsTo('\App\Category');
    }


    public function sizes(){
        return $this->belongsToMany('\App\Size','product__sizes','product_id','size_id');

    }
    
    public function scopeSearch($query,$word){
        $word= explode(" ", $word);
        
        for($i=0; $i<count("word"); $i++){
            $query->where('description','like','%'.$word[$i].'%');
        }
        
    }


    


}
