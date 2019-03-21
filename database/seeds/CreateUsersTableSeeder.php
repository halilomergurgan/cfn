<?php

use Illuminate\Database\Seeder;

class CreateUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'     => 'gg',
                'password' => bcrypt("123456"),
                'email'    => 'gokhanguneygg@gmail.com'
            ]
        ];
        DB::table('users')->insert($users);
    }
}
