<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'book_id';
    protected $dateFormat = 'd-m-Y';
    

    public function type()
    {   
        return $this->belongsTo('App\Types');
    }

    public function publisher()
    {
        return $this->belongsToMany('App\Publishers');
    }

    public function author()
    {
        return $this->belongsToMany('App\Authors');
    }


}
