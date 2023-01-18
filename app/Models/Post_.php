<?php

namespace App\Models;


class Post
{
    private static
        $blog_posts = [
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Eko Tri Yustikawan",
                "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus labore sunt at facilis quibusdam perferendis excepturi doloribus, numquam porro molestiae totam itaque, soluta quisquam rerum. Quidem adipisci odio aperiam dolores aliquam ut exercitationem tempore perspiciatis nulla! Nobis nihil perspiciatis dolorem eum cupiditate sunt numquam quasi natus, vero atque dolores quae quam voluptas labore, in aut aliquid eveniet mollitia odio! Sint veritatis vero adipisci culpa odio aliquam voluptate est nostrum incidunt consequuntur, error laborum obcaecati iusto alias eum commodi! Suscipit, laboriosam."
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Wawan",
                "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus labore sunt at facilis quibusdam perferendis excepturi doloribus, numquam porro molestiae totam itaque, soluta quisquam rerum. Quidem adipisci odio aperiam dolores aliquam ut exercitationem tempore perspiciatis nulla! Nobis nihil perspiciatis dolorem eum cupiditate sunt numquam quasi natus, vero atque dolores quae quam voluptas labore, in aut aliquid eveniet mollitia odio! Sint veritatis vero adipisci culpa odio aliquam voluptate est nostrum incidunt consequuntur, error laborum obcaecati iusto alias eum commodi! Suscipit, laboriosam."
            ],
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
