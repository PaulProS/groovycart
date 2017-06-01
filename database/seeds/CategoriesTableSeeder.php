<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category;
        $category->name = "men";
        $category['photo_id'] = 31;
        $category->save();
        $category = new Category;
        $category->name = "women";
        $category['photo_id'] = 32;
        $category->save();
        $category = new Category;
        $category->name = "kid";
        $category['photo_id'] = 33;
        $category->save();

        $category = new Category;
        $category->name = "clothing";
        $category->parent_id = 1;
        $category->save();
        $category = new Category;
        $category->name = "wallet";
        $category->parent_id = 1;
        $category->save();
        $category = new Category;
        $category->name = "shoes";
        $category->parent_id = 1;
        $category->save();
        $category = new Category;
        $category->name = "watches";
        $category->parent_id = 1;
        $category->save();
        $category = new Category;
        $category->name = "accessories";
        $category->parent_id = 1;
        $category->save();

        $category = new Category;
        $category->name = "clothing";
        $category->parent_id = 2;
        $category->save();
        $category = new Category;
        $category->name = "wallets,bags";
        $category->parent_id = 2;
        $category->save();
        $category = new Category;
        $category->name = "footwear";
        $category->parent_id = 2;
        $category->save();
        $category = new Category;
        $category->name = "watches";
        $category->parent_id = 2;
        $category->save();
        $category = new Category;
        $category->name = "accessories";
        $category->parent_id = 2;
        $category->save();
        $category = new Category;
        $category->name = "jewellery";
        $category->parent_id = 2;
        $category->save();
        $category = new Category;
        $category->name = "beauty & grooming";
        $category->parent_id = 2;
        $category->save();

        $category = new Category;
        $category->name = "kid's home fashion";
        $category->parent_id = 3;
        $category->save();
        $category = new Category;
        $category->name = "girl's clothing";
        $category->parent_id = 3;
        $category->save();
        $category = new Category;
        $category->name = "shoes";
        $category->parent_id = 3;
        $category->save();
        $category = new Category;
        $category->name = "brands store";
        $category->parent_id = 3;
        $category->save();
    }
}
