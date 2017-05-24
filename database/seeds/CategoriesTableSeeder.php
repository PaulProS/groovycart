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
        $category->name = "Men";
        $category->save();
        $category = new Category;
        $category->name = "Women";
        $category->save();
        $category = new Category;
        $category->name = "Accessories";
        $category->save();
        $category = new Category;
        $category->name = "Hotlist";
        $category->save();

        $category = new Category;
        $category->name = "Torso";
        $category->parent_id = 1;
        $category->save();

        $category = new Category;
        $category->name = "Legs";
        $category->parent_id = 1;
        $category->save();

        $category = new Category;
        $category->name = "Torso";
        $category->parent_id = 2;
        $category->save();

        $category = new Category;
        $category->name = "Legs";
        $category->parent_id = 2;
        $category->save();

    }
}
