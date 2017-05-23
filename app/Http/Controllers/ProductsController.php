<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function category($id){

        global $catIds;

        if(count(Category::where('parent_id', $id)->get())){

            $child = Category::where('parent_id', $id)->get();
            $catIds[] = $child[0]->id;
            $this->category($child[0]->id);
        }

        $products = Product::whereIn('category_id', $catIds)->get();

        $parentCategories = Category::where('parent_id', '=', null)->get();

        return view('store', compact('products','parentCategories'));
    }

}
