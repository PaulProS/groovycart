<?php

namespace App\Http\Controllers;

use App\Category;
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
                return view('admin.index');
            }
        }

        $parentCategories = Category::where('parent_id', '=', null)->get();

        return view('home', compact('parentCategories'));
    }
}
