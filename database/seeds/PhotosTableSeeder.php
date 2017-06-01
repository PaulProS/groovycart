<?php

use App\Photo;
use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photo = new Photo;
        $photo['photo'] = '18.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = '19.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = '20.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = '21.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = '22.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = '23.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = '24.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = '25.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = '26.jpg';
        $photo->save();
    }
}
