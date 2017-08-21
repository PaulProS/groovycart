<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check() && Auth::user()->role){
            if(Auth::user()->role->name == 'administrator'){
                $orderTotal = Order::where('status', '0')->get()->count();
                return view('admin.index', compact('orderTotal'));
            }
        }
        return view('home');
    }
}
