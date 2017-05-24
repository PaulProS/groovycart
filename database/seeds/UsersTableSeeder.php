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
        $user->photo_id = "";
        $user->is_active = "1";
        $user->name = "admin";
        $user->email = "admin@admin.com";
        $user->address = "Abc";
        $user->password = Hash::make("123456");
        $user->save();
    }
}
