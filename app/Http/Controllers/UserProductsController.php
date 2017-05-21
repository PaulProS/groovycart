<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class UserProductsController extends Controller
{

    public function allProducts(){

        $products = Product::all();

        foreach ($products as $product){

            if($parentId = $product->category->parent_id){

                $upperParent = Category::findOrFail($parentId);

                if($secondUpper = $upperParent->parent_id){

                    $secondUpper = Category::findOrFail($secondUpper);

                    if($thirdUpper = $secondUpper->parent_id){

                        $thirdUpper = Category::findOrFail($thirdUpper);

                        echo "Parent : " . $thirdUpper->name;

                    }
                    echo "</br>";

                    echo "Parent : " . $secondUpper->name;
                }

                echo "</br>";

                echo "Parent : " . $upperParent->name;

            }

            echo "</br>";

            echo $product->category->name;

        }

        return;

//        $parentCategories = Category::where('parent_id', '=', null)->get();
//
//        return view('allProducts', compact('products','parentCategories'));
    }

}
