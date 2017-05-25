<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class StoreController extends Controller
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

        $mainCat = Category::findOrFail($catIds[0]);

        $products = Product::whereIn('category_id', $catIds)->get();
        $parentCategories = Category::where('parent_id', '=', null)->get();
        return view('store', compact('products','parentCategories', 'mainCat'));
    }


    public function viewProduct($id){

        $product = Product::findOrFail($id);
        $parentCategories = Category::where('parent_id', '=', null)->get();
        return view('single', compact('product','parentCategories'));
    }

    public function getSearch(){
        $keyword = Input::get('keyword');
        $products = Product::where('title', 'LIKE', '%'.$keyword.'%')->get();
        $parentCategories = Category::where('parent_id', '=', null)->get();
        return view('search',  compact('products', 'parentCategories', 'keyword'));
    }
}
