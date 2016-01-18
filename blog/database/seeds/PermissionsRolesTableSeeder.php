<?php

use Illuminate\Database\Seeder;

class PermissionsRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Roles
        $roles = [
          ['name' => 'admin', 'label' => 'administrator'],
          ['name' => 'customer', 'label' => 'customer'],
        ];
        DB::table('roles')->insert($roles);

        //Permissions
        $permissions = [
          ['name' => 'all', 'label' => 'all'],
        ];
        DB::table('permissions')->insert($permissions);

        //Permissions link to Roles
        $permission_role = [
          ['permission_id' => '1', 'role_id' => '1'],
        ];
        DB::table('permission_role')->insert($permission_role);
    }
}
