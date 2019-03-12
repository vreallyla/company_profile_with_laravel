<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(brandSeeder::class);
         $this->call(productSeeder::class);
         $this->call(tetimonialSeeder::class);
         $this->call(aboutSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(contactSeeder::class);
        $this->call(carouselSeeder::class);
    }
}
