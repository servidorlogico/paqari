<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
	protected $fillable = ['name','url'];
    public $timestamps =false;
}
