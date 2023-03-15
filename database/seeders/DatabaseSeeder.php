<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Samudra Panji Nugroho',
            'username' => 'samudrapanji',
            'email' => 'samudra@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Doddy Ferdiansah',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Game Console',
            'slug' => 'game-console',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto libero porro quo nulla non',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum tempora voluptatem est, fugit architecto laborum quas voluptatum debitis maiores, eos sapiente possimus voluptatibus accusamus, assumenda quae beatae at magnam suscipit aliquam dolorum molestiae incidunt dignissimos! Mollitia maxime odit tempore cum provident doloribus placeat, nulla nam possimus reprehenderit asperiores quo dolores quae aperiam minima repudiandae animi amet tempora ducimus, eius inventore?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, pariatur praesentium non sit reprehenderit blanditiis ullam ipsum illum dolorem consequuntur.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In suscipit veniam minus eaque assumenda consequatur fuga quam, saepe officiis possimus doloribus dolorem quia cupiditate, ut neque autem, maiores odit! Quae qui alias esse asperiores nemo doloremque repudiandae, ipsum cupiditate tempore officia possimus. Numquam quae praesentium, ex ratione consequuntur officia ipsa!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto libero porro quo nulla non',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum tempora voluptatem est, fugit architecto laborum quas voluptatum debitis maiores, eos sapiente possimus voluptatibus accusamus, assumenda quae beatae at magnam suscipit aliquam dolorum molestiae incidunt dignissimos! Mollitia maxime odit tempore cum provident doloribus placeat, nulla nam possimus reprehenderit asperiores quo dolores quae aperiam minima repudiandae animi amet tempora ducimus, eius inventore?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, pariatur praesentium non sit reprehenderit blanditiis ullam ipsum illum dolorem consequuntur.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In suscipit veniam minus eaque assumenda consequatur fuga quam, saepe officiis possimus doloribus dolorem quia cupiditate, ut neque autem, maiores odit! Quae qui alias esse asperiores nemo doloremque repudiandae, ipsum cupiditate tempore officia possimus. Numquam quae praesentium, ex ratione consequuntur officia ipsa!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ea asperiores impedit fugit at? Blanditiis animi quos dolorem aliquam alias id molestiae. Unde!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto libero porro quo nulla non',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum tempora voluptatem est, fugit architecto laborum quas voluptatum debitis. Mollitia maxime odit tempore cum provident doloribus placeat, nulla nam possimus reprehenderit asperiores quo dolores quae aperiam minima repudiandae animi amet tempora ducimus, eius inventore?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, pariatur praesentium non sit reprehenderit blanditiis ullam ipsum illum dolorem consequuntur.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In suscipit veniam minus eaque assumenda consequatur fuga quam, saepe officiis possimus doloribus dolorem quia cupiditate, ut neque autem, maiores odit! Quae qui alias esse asperiores nemo doloremque repudiandae, ipsum cupiditate tempore officia possimus. Numquam quae praesentium, ex ratione consequuntur officia ipsa!</p>',
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Judul Empat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto libero porro quo nulla non',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum tempora voluptatem est, fugit architecto laborum quas voluptatum debitis. Mollitia maxime odit tempore cum provident doloribus placeat, nulla nam possimus reprehenderit asperiores quo dolores quae aperiam minima repudiandae animi amet tempora ducimus, eius inventore?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, pariatur praesentium non sit reprehenderit blanditiis ullam ipsum illum dolorem consequuntur.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In suscipit veniam minus eaque assumenda consequatur fuga quam, saepe officiis possimus doloribus dolorem quia cupiditate, ut neque autem, maiores odit! Quae qui alias esse asperiores nemo doloremque repudiandae, ipsum cupiditate tempore officia possimus. Numquam quae praesentium, ex ratione consequuntur officia ipsa!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
