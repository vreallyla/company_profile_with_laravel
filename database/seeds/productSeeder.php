<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        $products = [
            [
                'name' => 'ABRASIVE',
                'img' => '/img/footages/300x200.png',
                'desc' => '<p>A wide range of abrasive products are available for all your metals and materials working needs, from the process of grinding, cutting up until polishing. There are different abrasives that can perfectly suit your needs in certain specific applications, such as all stainless materials or even flammable working areas. You can look at all our abrasive range below and if you have any questions, please do not hesitate to contact us.</p>'],
            [
                'name' => 'HOIST',
                'img' => '/img/footages/300x200.png',
                'desc' => '<p>Depending on the terrain and space, most of the time you still could not use the automation or robotic power that is available with today\'s technology. Semi-manual lever block and chain block are still a necessity and pretty much your next best friend if one needs to lift a heavy and bulky industrial objects. We have two of the most well loved and trusted brands in the world to meet that needs.</p>'],
            [
                'name' => 'CHEMICAL & SOLUTION',
                'img' => '/img/footages/300x200.png',
                'desc' => '<p>Our Chemical & Solution products are geared mainly towards the needs of everyday home users and small industry & factory works. All our partner suppliers for our chemical & solution products all have attained a loyal fan base in their home country and employ a stringent quality control.</p>'],
            [
                'name' => 'HOSE',
                'img' => '/img/footages/300x200.png',
                'desc' => '<p>Hose selection that covers specific professional use to everyday industrial operation. We have brands coming from countries, such as Japan, Taiwan, Thailand and China, to fit your budget and quality requirements. Do let us know if you require a specific type of hose that we might not list under our hose category page, there is a high chance of our partner supplier still being able to meet your need as long as it is made of rubber or PVC.</p>'],
            [
                'name' => 'TOOLS',
                'img' => '/img/footages/300x200.png',
                'desc' => '<p>We supply tools that are all made in Japan and we believe in their reliability and ease of use for users. Once you try it, you will know why many workers around Indonesia still insist on using our brands despite having many other brands available in the market.</p>'],
            [
                'name' => 'WELDING & REGULATOR',
                'img' => '/img/footages/300x200.png',
                'desc' => '<p>Welding torch gun, flashback, gas regulator, welding rods to welding gloves and masks, you name it. We have a complete line-up for your professional welding works.</p>'],
            [
                'name' => 'DRILL & CUTTIN',
                'img' => '/img/footages/300x200.png',
                'desc' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi beatae culpa cum dicta enim maxime modi nihil, sit, soluta suscipit velit. A eligendi minima natus quisquam similique temporibus vel.</p>'],
            [
                'name' => 'SEALANT & JOINTING',
                'img' => '/img/footages/300x200.png',
                'desc' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi consectetur deserunt eius eum eveniet exercitationem incidunt, maiores natus nihil placeat quaerat quibusdam quisquam repudiandae sapiente, similique ut! Impedit, nisi?</p>']];

        foreach ($products as $product) {
            \App\product::create([
                'name' => $product['name'],
                'img' => $product['img'],
                'desc' => $product['desc'],
            ]);
        }

        foreach (\App\product::all() as $product) {
            foreach (\App\brand::orderByRaw('RAND()')->take($faker->numberBetween(1, 4))->get() as $brand)
                \App\rsBrandsProduct::create([
                    'brand_id' => $brand->id,
                    'product_id' => $product->id,
                    'title' => $faker->word,
                    'img' => '/img/footages/600x400.png',
                    'desc' => '<p>'.$faker->realText($maxNbChars = 191, $indexSize = 2).'</p>',
                    'link_catalogue' => $faker->url,
                ]);
        }
    }
}
