<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [

        'photo_id',
        'category_id',
        'title',
        'description',
        'brand_id',
        'price',
        'stock',
        'is_active'

    ];

    public function photo(){

        return $this->belongsTo('App\Photo');

    }

    public function category(){

        return $this->belongsTo('App\Category');

    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    public function review(){
        return $this->hasMany('App\Review');
    }
}
