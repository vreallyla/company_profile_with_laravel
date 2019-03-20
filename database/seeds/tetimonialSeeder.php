<?php

use Illuminate\Database\Seeder;

class tetimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

       for ($i=0;$i<6;$i++){
           \App\testimonial::create([
               'testi_ava' => '/img/footages/user.png',
               'testi_name' => $faker->firstName,
               'testi_as' => $faker->jobTitle,
               'testi_desc' => $faker->realText($maxNbChars = 191, $indexSize = 2),
           ]);
       }
    }
}
