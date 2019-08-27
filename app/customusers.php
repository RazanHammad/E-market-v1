<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class customusers extends Model implements AuthenticatableContract
{	  use Authenticatable;
    // protected $guard = 'customusers';

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        public function reviews(){

        	return $this->hasmany('App\reviews');
        }
}
