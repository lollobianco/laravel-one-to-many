<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i <= 20; $i++){

            $new_post = new Post;
            $new_post->title = $faker->words(2, true);
            $new_post->body = $faker->text(250);
            $new_post->save();

        }

    }
}
