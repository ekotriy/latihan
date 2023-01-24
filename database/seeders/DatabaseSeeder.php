<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        
        // User::create([
            //     'name' => 'Eko Tri Yustikawan',
            //     'email' => 'eko@gmail.com',
            //     'password' => bcrypt('12345')
            // ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Post::factory(10)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet quas ullam molestiae delectus eaque consectetur fuga ipsam, ratione quasi aut.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque expedita temporibus odit tempora quae asperiores, officiis, quidem adipisci dolor, qui soluta porro eius natus fugit necessitatibus! Debitis quo tenetur ea ducimus qui deleniti sapiente quas est, quaerat tempore non quidem sed reprehenderit officia laborum temporibus consequatur dolore corporis doloremque eligendi voluptatem!</p><p>Reiciendis fugit consequuntur voluptates ad qui deleniti. Officiis assumenda eveniet ab, rem ad magni molestiae fuga soluta nostrum aut, tenetur, voluptatibus voluptatum dolores commodi? Nulla fugiat, officia maxime assumenda hic consectetur quisquam. Repudiandae accusantium sint rerum non doloribus id, animi incidunt at officia nam, beatae necessitatibus, mollitia deserunt quia.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet quas ullam molestiae delectus eaque consectetur fuga ipsam, ratione quasi aut.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque expedita temporibus odit tempora quae asperiores, officiis, quidem adipisci dolor, qui soluta porro eius natus fugit necessitatibus! Debitis quo tenetur ea ducimus qui deleniti sapiente quas est, quaerat tempore non quidem sed reprehenderit officia laborum temporibus consequatur dolore corporis doloremque eligendi voluptatem!</p><p>Reiciendis fugit consequuntur voluptates ad qui deleniti. Officiis assumenda eveniet ab, rem ad magni molestiae fuga soluta nostrum aut, tenetur, voluptatibus voluptatum dolores commodi? Nulla fugiat, officia maxime assumenda hic consectetur quisquam. Repudiandae accusantium sint rerum non doloribus id, animi incidunt at officia nam, beatae necessitatibus, mollitia deserunt quia.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet quas ullam molestiae delectus eaque consectetur fuga ipsam, ratione quasi aut.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque expedita temporibus odit tempora quae asperiores, officiis, quidem adipisci dolor, qui soluta porro eius natus fugit necessitatibus! Debitis quo tenetur ea ducimus qui deleniti sapiente quas est, quaerat tempore non quidem sed reprehenderit officia laborum temporibus consequatur dolore corporis doloremque eligendi voluptatem!</p><p>Reiciendis fugit consequuntur voluptates ad qui deleniti. Officiis assumenda eveniet ab, rem ad magni molestiae fuga soluta nostrum aut, tenetur, voluptatibus voluptatum dolores commodi? Nulla fugiat, officia maxime assumenda hic consectetur quisquam. Repudiandae accusantium sint rerum non doloribus id, animi incidunt at officia nam, beatae necessitatibus, mollitia deserunt quia.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
