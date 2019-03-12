<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'email' => 'admin@example.com',
            'ava' => '/img/footages/user.png',
            'password' => bcrypt('secret'),
            'name' => 'admin',
            'remember_token'=>'daskjdhKJHDAk',
            'email_verified_at'=>now()
        ]);
    }
}
