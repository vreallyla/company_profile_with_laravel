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
               'ava' => '/img/footages/user.png',
               'name' => $faker->firstName,
               'as' => $faker->jobTitle,
               'desc' => $faker->realText($maxNbChars = 191, $indexSize = 2),
           ]);
       }
    }
}
