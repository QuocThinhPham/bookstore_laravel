<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'sach';
    //Primary Key
    public $primaryKey = 'Masach';
    //Timestamps
    public $timestamps = true;
}
