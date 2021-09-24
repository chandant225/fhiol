<?php

use App\PostCategory;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostCategory::firstOrCreate([
            'name' => 'News & Notices',
            'slug' => 'news-and-notices',
        ]);

        PostCategory::firstOrCreate([
            'name' => 'Articles',
            'slug' => 'articles',
        ]);
    }
}
