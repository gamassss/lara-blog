<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
        'author' => 'Gamas Namara Akbar',
        'slug' => 'judul-post-1',
        'title' => 'Judul Post Pertama',
        'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto aut in, harum alias tempora nobis velit minus ducimus! Necessitatibus, perferendis minus eveniet ipsa accusantium, at sint molestias libero alias reprehenderit dolore blanditiis iusto ex? Cum quaerat dignissimos ipsam. Velit, dolorum quas? Dolor illum sint earum molestiae alias porro voluptatem vero.'
        ],
        [
            'author' => 'Dea Nabila Husna',
            'slug' => 'judul-post-2',
            'title' => 'Judul Post Kedua',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto aut in, harum alias tempora nobis velit minus ducimus! Necessitatibus, perferendis minus eveniet ipsa accusantium, at sint molestias libero alias reprehenderit dolore blanditiis iusto ex? Cum quaerat dignissimos ipsam. Velit, dolorum quas? Dolor illum sint earum molestiae alias porro voluptatem vero.'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
