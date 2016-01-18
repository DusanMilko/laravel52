<?php

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
        //Roles
        $users = [
          [
          'name' => 'panicpop', 
          'email' => 'dusanmilko@hotmail.com',
          'password' => Hash::make('poppass0'),
          ],
        ];
        DB::table('users')->insert($users);

        //User link to Roles
        $role_user = [
          ['role_id' => '1', 'user_id' => '1'],
        ];
        DB::table('role_user')->insert($role_user);
    }
}
