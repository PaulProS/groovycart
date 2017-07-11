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

    public function store(Request $request, $id){

        global $catIds;
        $catIds[] = (int) $id;

        if(count(Category::where('parent_id', $id)->get())){
            $cats = Category::where('parent_id', $id)->get();
            foreach ($cats as $child){
                $this->store($request, $child->id);
            }
        }

        $subCategories = Category::whereIn('id', $catIds)->get();
        $category = Category::findOrFail($catIds[0]);
        $products = Product::whereIn('category_id', $catIds)->paginate(9);
        $newProducts = Product::whereIn('category_id', $catIds)->orderBy('created_at', 'desc')->take(2)->get();

        if ($request->ajax()) {
            return view('partials.products', ['products' => $products], compact('products', 'newProducts', 'category', 'subCategories'))->render();
        }

        return view('store', compact('products', 'newProducts', 'category', 'subCategories'));
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
        return json_encode($products);
    }

    public function addToCart(Request $request, $id){
        $product = Product::findOrFail($id);
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return json_encode(session()->get('cart'));
    }

    public function decreaseByOne(Request $request, $id){
        $oldCart = session('cart');
        $oldCart->decreaseQuantity($id);
        $cart = new Cart($oldCart);
        $request->session()->put('cart', $cart);
        return json_encode(session()->get('cart'));
    }

    public function increaseByOne(Request $request, $id){
        $product = Product::findOrFail($id);
        $oldCart = session('cart');
        $oldCart->increaseQuantity($id, $product);
        $cart = new Cart($oldCart);
        $request->session()->put('cart', $cart);
        return json_encode(session()->get('cart'));
    }

    public function deleteCartItem($id){
        $cart = session('cart');
        $cart->removeItem($id);
        unset($cart->items[$id]);
        return json_encode(session()->get('cart'));
    }

    public function getCart(){
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        $products = $cart->items;
        return view('cart', compact('products'));
    }

    public function emptyCart(){
        session()->forget('cart');
    }

}