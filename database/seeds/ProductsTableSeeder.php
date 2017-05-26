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
        $product->category_id = 1;
        $product->title = "demo men product 1";
        $product->description = "This is a demo product";
        $product->price = "99.99";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = null;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = null;
        $product->category_id = 1;
        $product->title = "demo men product 2";
        $product->description = "This is a demo product";
        $product->price = "99.99";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = null;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = null;
        $product->category_id = 1;
        $product->title = "demo men product 3";
        $product->description = "This is a demo product";
        $product->price = "99.99";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = null;
        $product->is_active =1;
        $product->save();

        $product = new Product;
        $product->photo_id = null;
        $product->category_id = 2;
        $product->title = "demo women product 1";
        $product->description = "this is a demo product";
        $product->price = "99.99";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = null;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = null;
        $product->category_id = 2;
        $product->title = "demo women product 2";
        $product->description = "this is a demo product";
        $product->price = "99.99";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = null;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = null;
        $product->category_id = 2;
        $product->title = "demo women product 3";
        $product->description = "this is a demo product";
        $product->price = "99.99";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = null;
        $product->is_active =1;
        $product->save();

        $product = new Product;
        $product->photo_id = null;
        $product->category_id = 3;
        $product->title = "Demo kids Product 1";
        $product->description = "This is a demo product";
        $product->price = "99.99";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = null;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = null;
        $product->category_id = 3;
        $product->title = "Demo kids Product 2";
        $product->description = "This is a demo product";
        $product->price = "99.99";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = null;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = null;
        $product->category_id = 3;
        $product->title = "Demo kids Product 3";
        $product->description = "This is a demo product";
        $product->price = "99.99";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = null;
        $product->is_active =1;
        $product->save();

    }
}
