<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    //
    protected $table = 'authors';
    protected $primaryKey = 'author_id';

    public function book()
    {
        return $this->belongsToMany('App\Books');
    }
}