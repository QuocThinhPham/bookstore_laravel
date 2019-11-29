<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'book_id';


    public function type()
    {
        return $this->belongsTo('App\Types', 'book_type');
    }

    public function publisher()
    {
        return $this->belongsToMany('App\Publishers', 'book_publisher');
    }

    public function author()
    {
        return $this->belongsTo('App\Authors', 'book_author');
    }
}
