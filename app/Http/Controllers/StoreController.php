<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Review;
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
        return view('store', compact('products', 'mainCat'));
    }


    public function viewProduct($id){

        $product = Product::findOrFail($id);
        return view('single', compact('product'));
    }

    public function getSearch(){
        $keyword = Input::get('keyword');
        $products = Product::where('title', 'LIKE', '%'.$keyword.'%')->get();
        return view('search',  compact('products', 'keyword'));
    }

    public function review(Request $request, $prodId, $userId){

        $input = $request->all();
        $input['user_id'] = $userId;
        $input['product_id'] = $prodId;

        Review::create($input);
        return redirect(route('product', $prodId));
    }
}
