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
        $product->photo_id = 1;
        $product->category_id = 4;
        $product->title = "Rough Formal Shirt";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 2;
        $product->category_id = 4;
        $product->title = "Formal Shirt Plain";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 3;
        $product->category_id = 4;
        $product->title = "Formal Shirt Satin";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 4;
        $product->category_id = 6;
        $product->title = "Snickers";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 5;
        $product->category_id = 6;
        $product->title = "Casual Shoes";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 6;
        $product->category_id = 6;
        $product->title = "Rough & Tough Shoes";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 7;
        $product->category_id = 4;
        $product->title = "Blazer Rough";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 8;
        $product->category_id = 4;
        $product->title = "Blazer Half Sleeve";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 9;
        $product->category_id = 4;
        $product->title = "Blazer Full Sleeve";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 34;
        $product->category_id = 7;
        $product->title = "Copper Metal Watch";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 35;
        $product->category_id = 7;
        $product->title = "Silver Metal Watch";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 36;
        $product->category_id = 7;
        $product->title = "Sports Watch";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 37;
        $product->category_id = 8;
        $product->title = "Brown Leather Belt";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 38;
        $product->category_id = 5;
        $product->title = "Black Leather Wallet";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 39;
        $product->category_id = 5;
        $product->title = "Stylish Blue Wallet";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 40;
        $product->category_id = 8;
        $product->title = "Black Leather Belt";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 41;
        $product->category_id = 5;
        $product->title = "Leather Wallet";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 42;
        $product->category_id = 5;
        $product->title = "Rusty Wallet";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 43;
        $product->category_id = 4;
        $product->title = "Premium Maroon Trouser";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 44;
        $product->category_id = 4;
        $product->title = "Premium Formal Trouser";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 45;
        $product->category_id = 4;
        $product->title = "Premium Formal Trouser";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 46;
        $product->category_id = 8;
        $product->title = "Black Leather Belt";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 47;
        $product->category_id = 4;
        $product->title = "Yellow Trouser";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 48;
        $product->category_id = 8;
        $product->title = "Premium Formal Tie";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 49;
        $product->category_id = 8;
        $product->title = "Satin Premium Tie";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 50;
        $product->category_id = 8;
        $product->title = "Satin Printed Tie";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 51;
        $product->category_id = 8;
        $product->title = "Premium Dotted Tie";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();

        $product = new Product;
        $product->photo_id = 10;
        $product->category_id = 9;
        $product->title = "Rough Formal Shirt";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 11;
        $product->category_id = 9;
        $product->title = "Formal Denim";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 12;
        $product->category_id = 9;
        $product->title = "Floral Shirt";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 13;
        $product->category_id = 10;
        $product->title = "Tote Handbag";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 14;
        $product->category_id = 10;
        $product->title = "Wallet Flory";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 15;
        $product->category_id = 10;
        $product->title = "Handbag Office";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 16;
        $product->category_id = 11;
        $product->title = "Fairy Shoes";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 17;
        $product->category_id = 11;
        $product->title = "Lace Boot Long";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 18;
        $product->category_id = 11;
        $product->title = "High Heel Boot";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();

        $product = new Product;
        $product->photo_id = 22;
        $product->category_id = 17;
        $product->title = "Fairy Frock";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 23;
        $product->category_id = 17;
        $product->title = "Cinderella Dress";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 24;
        $product->category_id = 17;
        $product->title = "Rosy Frock";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 25;
        $product->category_id = 18;
        $product->title = "Belly Shoes";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 26;
        $product->category_id = 18;
        $product->title = "Boot Fancy";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 27;
        $product->category_id = 18;
        $product->title = "Piggy Shoes";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 28;
        $product->category_id = 16;
        $product->title = "Shirt Funky";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 29;
        $product->category_id = 16;
        $product->title = "Iron Man Dress";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();
        $product = new Product;
        $product->photo_id = 30;
        $product->category_id = 16;
        $product->title = "Formal Shirt";
        $product->description = "This description is seeded, you can update it within DB or admin dashboard and can even delete the product from admin dashboard to add product of your choice";
        $product->price = "500";
        $product->brand_id = null;
        $product->rating = 5;
        $product->stock = 5;
        $product->is_active =1;
        $product->save();

    }
}
