<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'username' => 'pandhu.hutomo',
            'password' => Hash::make('password')
        ));
    }
}