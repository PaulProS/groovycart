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
        'stock',
        'is_active'

    ];
}
