<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
//        User::factory(10)->create();
//        User::truncate();
//        Post::truncate();
//        Category::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

//        $user = User::factory()->create();

//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        Post::create([
//            'user_id'     => $user->id,
//            'category_id' => $family->id,
//            'title'       => 'My-Family-Post',
//            'slug'        => 'my-family-post',
//            'excerpt'     => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
//            'body'        => '<p>Fusce at elit velit. Pellentesque est nisl, varius sed convallis sed, luctus sit amet ante. In mattis, arcu non malesuada eleifend, elit dolor imperdiet turpis, quis lacinia lacus orci vel justo. Phasellus tincidunt suscipit mauris vitae dignissim. Vestibulum a augue volutpat, mattis leo a, accumsan lacus. Proin nec orci vitae nisi tristique dapibus eget ut diam. Integer pulvinar nunc in velit euismod euismod. Aliquam lacinia cursus mauris a gravida. Vivamus lectus risus, porta non bibendum ac, varius non quam. Sed molestie ante nisl. Curabitur tellus urna, convallis a aliquet ac, posuere et nibh.</p>'
//        ]);
//
//        Post::create([
//            'user_id'     => $user->id,
//            'category_id' => $work->id,
//            'title'       => 'My-Word-Post',
//            'slug'        => 'my-work-post',
//            'excerpt'     => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
//            'body'        => '<p>Fusce at elit velit. Pellentesque est nisl, varius sed convallis sed, luctus sit amet ante. In mattis, arcu non malesuada eleifend, elit dolor imperdiet turpis, quis lacinia lacus orci vel justo. Phasellus tincidunt suscipit mauris vitae dignissim. Vestibulum a augue volutpat, mattis leo a, accumsan lacus. Proin nec orci vitae nisi tristique dapibus eget ut diam. Integer pulvinar nunc in velit euismod euismod. Aliquam lacinia cursus mauris a gravida. Vivamus lectus risus, porta non bibendum ac, varius non quam. Sed molestie ante nisl. Curabitur tellus urna, convallis a aliquet ac, posuere et nibh.</p>'
//        ]);
//
//        Post::create([
//            'user_id'     => $user->id,
//            'category_id' => $personal->id,
//            'title'       => 'My-Personal-Post',
//            'slug'        => 'my-personal-post',
//            'excerpt'     => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
//            'body'        => '<p>Fusce at elit velit. Pellentesque est nisl, varius sed convallis sed, luctus sit amet ante. In mattis, arcu non malesuada eleifend, elit dolor imperdiet turpis, quis lacinia lacus orci vel justo. Phasellus tincidunt suscipit mauris vitae dignissim. Vestibulum a augue volutpat, mattis leo a, accumsan lacus. Proin nec orci vitae nisi tristique dapibus eget ut diam. Integer pulvinar nunc in velit euismod euismod. Aliquam lacinia cursus mauris a gravida. Vivamus lectus risus, porta non bibendum ac, varius non quam. Sed molestie ante nisl. Curabitur tellus urna, convallis a aliquet ac, posuere et nibh.</p>'
//        ]);
    }
}
