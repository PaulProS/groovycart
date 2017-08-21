<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Order;
use App\Product;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;
use Stripe\Charge;
use Stripe\Stripe;
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
        $newProducts = Product::whereIn('category_id', $catIds)->orderBy('created_at', 'desc')->take(2)->get();

        $sortId = 0;
        if($sortId == 0){
            $products = Product::whereIn('category_id', $catIds)->paginate(9);
        }


        if ($request->ajax()) {
            $sortId = $request->input( 'sortId' );
            if($sortId == 1){
                $products = Product::orderBy('price', 'asc')->whereIn('category_id', $catIds)->paginate(9);
            }
            if($sortId == 2){
                $products = Product::orderBy('price', 'desc')->whereIn('category_id', $catIds)->paginate(9);
            }
            return view('partials.products', ['products' => $products], compact('products', 'newProducts', 'category', 'subCategories'))->render();
        }

        if (Input::get('minPrice') &&  Input::get('maxPrice')){
            $minPrice = Input::get('minPrice');
            $maxPrice = Input::get('maxPrice');
            $products = Product::whereBetween('price', [$minPrice, $maxPrice])->whereIn('category_id', $catIds)->paginate(9);
        }

        return view('store', compact('products', 'newProducts', 'category', 'subCategories'));

    }

    //Viewing a single product details page
    public function viewProduct($id){
        $product = Product::findOrFail($id);
        return view('single', compact('product'));
    }

    //Get products searched by a specific keyword
    public function getSearch(){
        $keyword = Input::get('keyword');
        $products = Product::where('title', 'LIKE', '%'.$keyword.'%')->get();
        return view('search',  compact('products', 'keyword'));
    }

    //Adding new review
    public function review(Request $request, $prodId, $userId){
        $input = $request->all();
        $input['user_id'] = $userId;
        $input['product_id'] = $prodId;
        Review::create($input);
        return redirect(route('product', $prodId));
    }

    //Adding product in the cart
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

    public function getCheckout(){
        if(!session('cart')){
            return redirect('cart');
        }

        if(!Auth::user()){
            return redirect(route('login'));
        }
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout', compact('total'));
    }

    public function postCheckout(Request $request){
        if(!session('cart')){
            return redirect('cart');
        }

        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey("sk_test_KyLOVHmGPoAnkJ0pTvGUlN7e");

        // Token is created using Stripe.js or Checkout!
        // Get the payment token ID submitted by the form:

        // Charge the user's card:
        try {
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "INR",
                "description" => "Example charge",
                "source" => $request->input('StripeToken')
            ));

            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->payment_id = $charge->id;

            Auth::user()->order()->save($order);

        } catch (\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        session()->forget('cart');
        return redirect(route('orders'))->with('orderMsg', 'Your order has been placed successfully');
    }

    public function order(){
        $orders = Auth::user()->order;
        $orders->transform(function ($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('user.orders', compact('orders'));
    }

}