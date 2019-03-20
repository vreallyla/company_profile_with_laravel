<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('cs_CZ');

        for ($i=0;$i<6;$i++){
            \App\categoryArticle::create([
                'cat_name'=>$faker->region(),
                'cat_desc'=>$faker->realText($maxNbChars = 191, $indexSize = 2),

            ]);
        }

        $faker = \Faker\Factory::create('id_ID');

//
       for ($i=0;$i<11;$i++){
           \App\article::create([
               'art_title' => $faker->word,
               'art_img' => '/img/footages/600x400.png',
               'art_by' => \App\User::first()->code,
               'art_desc' => '<p>' . $faker->realText($maxNbChars = 191, $indexSize = 2) .
                   '</p><p>' . $faker->realText($maxNbChars = 230, $indexSize = 2) .
                   '</p><p>' . $faker->realText($maxNbChars = 200, $indexSize = 2) .
                   '</p><p>' . $faker->realText($maxNbChars = 191, $indexSize = 2) . '</p>',
               'art_category_id'=>\App\categoryArticle::orderByRaw('RAND()')->take(1)->first()->code
           ]);
       }


//        foreach (\App\article::all() as $article) {
//
//            foreach ( \App\categoryArticle::orderByRaw('RAND()')->take($faker->numberBetween(1,3))->get() as $category)
//            \App\rsCategoriesNArticle::create([
//                'category_id' => $category->id,
//                'article_id' => $article->id
//            ]);
//        }
    }
}
