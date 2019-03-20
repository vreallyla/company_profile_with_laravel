<?php

use Illuminate\Database\Seeder;

class carouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\carousel::create([
            'car_title' => 'Work With Safety & Quality Tools At The Best Price ',
            'car_img' => 'img/bg-img/1.jpg',
            'car_desc' => 'PT. Usaha Jaya Primatek provides very reliable and safe products which our users would  definitely love and trust, Please browse through our product line-up ',
            'fill_btn_primary' => 'Products',
            'fill_btn_secondary' => 'About Us',
            'url_btn_primary' => '/products',
            'url_btn_secondary' => 'about',
        ]);
    }
}
