<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{protected $fillable = ['text', 'products_id', 'customusers_id' ];
    public function user (){

    	return $this->belongto('App\customusers');
    }

    public function product(){

    	return $this->belongto('App\products');
    }
}
