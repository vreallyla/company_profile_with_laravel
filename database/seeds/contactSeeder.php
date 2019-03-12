<?php

use Illuminate\Database\Seeder;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        \App\contact::create([
            'address' => $faker->address,
            'email' => $faker->safeEmail,
            'phone' => $faker->phoneNumber(true,true),
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'instagram' => 'https://instagram.com',
            'linkedin' => 'https://linkedin.com',
            'pinterest' => 'https://pinterest.com',
            'google_plus' => 'https://google_plus.com',
        ]);
    }
}
