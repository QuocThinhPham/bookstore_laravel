<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    //
    protected $table = 'types';
    protected $primaryKey = 'type_id';
    public $timestamps = false;
    public function books()
    {   
        return $this->hasMany('App\Books');
    }
}
