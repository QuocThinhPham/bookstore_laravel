<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetails extends Model
{
    //
    protected $table = 'order_detail';
    protected $primaryKey = ['order_id', 'book_id'];
    protected $guard = [];

    public function order()
    {
        return $this->belongsToMany('App\Order', 'order_id');
    }

    public function book()
    {
        return $this->belongsTo('App\Books', 'book_id');
    }
}
