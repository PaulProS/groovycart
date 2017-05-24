<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role;
        $role->name = "administrator";
        $role->save();
        $role = new Role;
        $role->name = "user";
        $role->save();
        $role = new Role;
        $role->name = "subscriber";
        $role->save();
    }
}
