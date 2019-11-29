<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    //
    protected $table = 'authors';
    protected $primaryKey = 'author_id';
    public $timestamps = false;

    public function book()
    {
        return $this->hasMany('App\Books', 'book_author');
    }
}
