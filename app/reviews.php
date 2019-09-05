<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{protected $fillable = ['text', 'products_id', 'users_id' ];
    public function users(){

    	return $this->belongsTo('App\User');
    }

    public function product(){

    	return $this->belongsTo('App\products');
    }
}
