<?php

namespace Database\Seeders;

use App\Models\Blog\Blog;
use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::factory(20)->create();
    }
}
