<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
    protected $table = 'publisher';
    protected $primaryKey = 'publisher_id';

    public function book()
    {
        return $this->belongsToMany('App\Books');
    }
}
