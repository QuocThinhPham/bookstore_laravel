<?php

namespace App;

use App\Http\Middleware\Authenticate;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    //
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $guard = [];
}
