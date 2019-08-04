<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
        
        public function products()

    {

        return $this->hasMany(products::class);

    }
}
