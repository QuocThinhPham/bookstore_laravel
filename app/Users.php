<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Users extends Authenticatable
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $timeStamp = true;

    public function order()
    {
        return $this->hasMany('App\Order', 'user_id');
    }

    public function getAuthPassword()
    {
        return $this->user_password;
    }
}
