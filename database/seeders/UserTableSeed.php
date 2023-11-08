<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::where('name','Admin')->first();

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email= 'admin@gmail.com';
        $admin->password =Hash::make('123456'); //bcrypt()
        $admin->save();
        $admin->roles()->attach($roleAdmin);

        $roleUser = Role::where('name','User')->first();
        $admin = new User();
        $admin->name = 'User';
        $admin->email= 'user@gmail.com';
        $admin->password =Hash::make('123456'); //bcrypt()
        $admin->save();
        $admin->roles()->attach($roleUser);
    }
}
