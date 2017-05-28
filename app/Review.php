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

    public function product(){
        $this->belongsTo('App\Product');
    }
}
