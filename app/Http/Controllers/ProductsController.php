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
            $cats = Category::where('parent_id', $id)->get();
            foreach ($cats as $child){
                $catIds[] = $child->id;
                $this->category($child->id);
            }
        }

        $products = Product::whereIn('category_id', $catIds)->get();
        $parentCategories = Category::where('parent_id', '=', null)->get();
        return view('store', compact('products','parentCategories'));
    }

}
