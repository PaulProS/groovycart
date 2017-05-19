<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [

        'name',
        'parent_id'

    ];

    public function child(){

        return $this->hasMany('App\Category', 'parent','id');

    }

    public function parent(){

        return $this->belongsTo('App\Category');

    }

}
