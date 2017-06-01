<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Product;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;
use Symfony\Component\HttpFoundation\Session\Session;

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

        $category = Category::findOrFail($catIds[0]);
        $products = Product::whereIn('category_id', $catIds)->get();
        $newProducts = Product::whereIn('category_id', $catIds)->orderBy('created_at', 'desc')->take(2)->get();
        return view('store', compact('products', 'newProducts', 'category'));
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

    public function filter(){
        $minPrice = Input::get('minPrice');
        $maxPrice = Input::get('maxPrice');

        $products = Product::whereBetween('price', [$minPrice, $maxPrice])->get();
        return view('filter', compact('products'));
    }

    public function addToCart(Request $request, $id){
        $product = Product::findOrFail($id);
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);

        return redirect()->back();
    }

    public function deleteCartItem($id){
        $product = Product::findOrFail($id);
        $cart = session('cart');
        $cart->removeItem($id);
        unset($cart->items[$id]);
        return redirect()->back();
    }

    public function getCart(){
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        $products = $cart->items;
        return view('cart', compact('products'));
    }

    public function emptyCart(){
        session()->forget('cart');
        return redirect()->back();
    }
}