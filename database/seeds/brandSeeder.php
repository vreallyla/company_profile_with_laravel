<?php

use Illuminate\Database\Seeder;

class brandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 11; $i++) {
            \App\brand::create([
                'brand_logo' => '/img/footages/300x100.jpg',
                'brand_name' => $faker->unique()->company(),
            ]);
        }
    }
}
