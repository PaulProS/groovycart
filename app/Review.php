<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [

        'product_id',
        'user_id',
        'rating',
        'subject',
        'message'

    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
