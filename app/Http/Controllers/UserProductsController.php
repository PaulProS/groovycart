<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class UserProductsController extends Controller
{

    public function allProducts(){

        $products = Product::all();

        //Get parent category of product

        $parentCategories = Category::where('parent_id', '=', null)->get();

        return view('allProducts', compact('products','parentCategories'));
    }

}
