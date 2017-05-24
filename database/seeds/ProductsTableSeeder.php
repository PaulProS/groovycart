<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product;
        $product->photo_id = null;
        $product->category_id = 5;
        $product->title = "Demo Men Torso Product";
        $product->description = "This is a demo product";
        $product->price = "99.99";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = null;
        $product->is_active =1;
        $product->save();

        $product = new Product;
        $product->photo_id = null;
        $product->category_id = 6;
        $product->title = "Demo Men Legs Product";
        $product->description = "This is a demo product";
        $product->price = "99.99";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = null;
        $product->is_active =1;
        $product->save();

        $product = new Product;
        $product->photo_id = null;
        $product->category_id = 7;
        $product->title = "Demo Women Torso Product";
        $product->description = "This is a demo product";
        $product->price = "99.99";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = null;
        $product->is_active =1;
        $product->save();

        $product = new Product;
        $product->photo_id = null;
        $product->category_id = 8;
        $product->title = "Demo Women Legs Product";
        $product->description = "This is a demo product";
        $product->price = "99.99";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = null;
        $product->is_active =1;
        $product->save();
    }
}
