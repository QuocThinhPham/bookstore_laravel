<?php

namespace App;

use Auth;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    protected $primaryKey = 'order_id';

    public function user()
    {
        return $this-belongsTo('App\Users', 'user_id');
    }

    public function book()
    {
        return $this->belongsToMany('App\books', 'order_detail', 'order_id', 'book_id')->withPivot('amount');
    }
}
