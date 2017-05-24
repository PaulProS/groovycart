<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function category($id){


        global $catIds;
        $catIds[] = (int) $id;

        if(count(Category::where('parent_id', $id)->get())){
            $cats = Category::where('parent_id', $id)->get();
            foreach ($cats as $child){
                $this->category($child->id);
            }
        }

        $products = Product::whereIn('category_id', $catIds)->get();
        $parentCategories = Category::where('parent_id', '=', null)->get();
        return view('store', compact('products','parentCategories'));
    }


    public function viewProduct($id){

        $product = Product::findOrFail($id);

        $parentCategories = Category::where('parent_id', '=', null)->get();

        return view('single', compact('product','parentCategories'));
    }
}
