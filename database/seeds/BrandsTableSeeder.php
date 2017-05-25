<?php

use App\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand = new Brand;
        $brand->name = "American Tourister";
        $brand->save();

        $brand = new Brand;
        $brand->name = "Provogue";
        $brand->save();
    }
}
