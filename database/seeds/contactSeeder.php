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
            'contact_address' => $faker->address,
            'contact_email' => $faker->safeEmail,
            'contact_phone' => $faker->phoneNumber(true,true),
            'contact_facebook' => 'https://facebook.com',
            'contact_twitter' => 'https://twitter.com',
            'contact_instagram' => 'https://instagram.com',
            'contact_linkedin' => 'https://linkedin.com',
            'contact_pinterest' => 'https://pinterest.com',
            'contact_google_plus' => 'https://google_plus.com',
        ]);
    }
}
