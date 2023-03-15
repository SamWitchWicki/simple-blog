<?php

namespace App\Models;


class Post
{
   private static $blog_posts = [
        [
            "title" => "Lorem 1",
            "slug" => "lorem-1",
            "author" => "Samudra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, incidunt minima? Inventore mollitia enim vel quae corrupti magnam? Excepturi tempora tenetur consequuntur fuga veniam quia aliquam ipsam ratione itaque, deserunt quod eligendi eos, obcaecati adipisci quaerat aut a sed iure voluptas? Ipsa magnam dolor laborum unde aliquam, eaque asperiores neque molestiae quis molestias id officia ullam ab eum a similique sapiente, consectetur natus corrupti laudantium in ex repellat dignissimos minima. Ipsa vitae est itaque laudantium id quidem illum soluta voluptates?"
        ],
        [
            "title" => "Lorem 2",
            "slug" => "lorem-2",
            "author" => "Dody",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, incidunt minima? Inventore mollitia enim vel quae corrupti magnam? Excepturi tempora tenetur consequuntur fuga veniam quia aliquam ipsam ratione itaque, deserunt quod eligendi eos,  magnam? Excepturi tempora tenetur consequuntur fuga veniam quia aliquam ipsam ratione itaque, deserunt quod eligendi eos, obcaecati adipisci quaerat aut a sed iure voluptas? Ipsa magnam dolor laborum unde aliquam, eaque asperiores neque molestiae quis molestias id officia ullam ab eum a similique sapiente, consectetur natus corrupti laudantium in ex repellat dignissimos minima. Ipsa vitae est itaque laudantium id quidem illum soluta voluptates?"
        ]
    ];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug) 
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
