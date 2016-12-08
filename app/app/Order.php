<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //


    protected $fillable =['total','user_id'];

    
     ///relaciones
     ///algunas orddenes es de un usario
     public function 	user(){

     	return $this->belongsTo('\App\User');
     }

     //una orden tiene varias lindeas en la que se detalla los productoos adquiridos
     public function 	detail(){

     	return $this->hasMany('\App\Order_Item');
     }

}
