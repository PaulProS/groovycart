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
        $photo = new Photo;
        $photo['photo'] = '35.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = '36.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = '37.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = '38.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = '39.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = '40.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = '41.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = '42.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = '43.jpg';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = 'admin.png';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = 'user.png';
        $photo->save();
        $photo = new Photo;
        $photo['photo'] = 'subscriber.jpg';
        $photo->save();
    }
}
