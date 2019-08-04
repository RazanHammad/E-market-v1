<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
   public function catagory()

    {

        return $this->belongsTo(catagory::class);

    }
}
