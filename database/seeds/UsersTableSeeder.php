<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->role_id = "1";
        $user->photo_id = 19;
        $user->is_active = "1";
        $user->name = "admin";
        $user->email = "admin@admin.com";
        $user->address = "abc";
        $user->password = Hash::make("123456");
        $user->save();

        $user = new User;
        $user->role_id = "2";
        $user->photo_id = 20;
        $user->is_active = "1";
        $user->name = "user";
        $user->email = "user@user.com";
        $user->address = "abc";
        $user->password = Hash::make("123456");
        $user->save();

        $user = new User;
        $user->role_id = "3";
        $user->photo_id = 21;
        $user->is_active = "1";
        $user->name = "subscriber";
        $user->email = "subscriber@subscriber.com";
        $user->address = "abc";
        $user->password = Hash::make("123456");
        $user->save();
    }
}
