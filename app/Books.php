<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'book_id';


    public function type()
    {
        return $this->belongsTo('App\Types', 'type_id');
    }

    public function publisher()
    {
        return $this->belongsToMany('App\Publishers');
    }

    public function author()
    {
        return $this->belongsTo('App\Authors', 'author_id');
    }

    public function order()
    {
        return $this->belongsToMany('App\orders', 'order_detail', 'order_id', 'book_id')->withPivot('amount');
    }
}
