<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
   protected $fillable =['size'];
   public $timestamps = false;
   public function products(){
        return $this->belongsToMany('\App\Product','product__sizes','size_id','product_id');




    }
}
