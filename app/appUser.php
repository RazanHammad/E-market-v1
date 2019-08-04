<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class appUser extends Authenticatable
{
   use Notifiable;
    protected $table = 'app_users';
}
