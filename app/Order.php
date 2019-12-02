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
}
