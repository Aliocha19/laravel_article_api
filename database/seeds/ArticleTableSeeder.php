<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */




    public function run()
    {
        
        factory(App\Article::class,20)->create();  
              //->each(function ($article) {
        //    // $article->posts()->save(factory(App\Post::class)->make());
        // });
    }
}
