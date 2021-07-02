<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userbook extends Model
{
    protected $table = "userbook";
    protected $fillable=['name' , 'namebook' , 'price' , 'des' ];
    protected $hidden=['updated_at', 'created_at', 'img'];
    public $timestamps = false;
}

