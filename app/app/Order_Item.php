<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Item extends Model
{
    //
     protected $fillable =['quantity','order_id','product_id'];


     //relaciones
     //detalles de orden pertenece solo a una order
     public function 	order(){

     	return $this->belongsTo('\App\Order');
     }


    
}
