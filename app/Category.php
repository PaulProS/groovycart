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


    public function parent(){
        return $this->belongsTo('App\Category');
    }

    public function children(){
        return $this->hasMany('App\Category', 'parent_id','id');
    }

    public function products(){
        return $this->belongsToMany('App\Category');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
