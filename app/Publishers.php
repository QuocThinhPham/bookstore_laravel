<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
    protected $table = 'publishers';
    protected $primaryKey = 'publisher_id';
    public $timestamps = false;
    
    public function book()
    {
        return $this->belongsToMany('App\Books');
    }
}
