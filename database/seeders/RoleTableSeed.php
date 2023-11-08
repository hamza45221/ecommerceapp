<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = new Role();
        $userRole->name='User';
        $userRole->desc='User Role';
        $userRole->save();


        $role = new Role();
        $role->name = 'Admin';
        $role->desc = 'Admin User';
        $role->save();
    }
}
