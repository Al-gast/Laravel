<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "First Post Title",
            "slug" => "first-post-title",
            "author" => "Person One",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nam voluptas atque, reprehenderit, minima, ipsum dicta earum sunt in illum fugit sapiente consequuntur itaque. At minus ullam corrupti quis itaque nihil sed blanditiis id quam animi sit aperiam perspiciatis aliquid, neque maxime iste odio facilis repellendus qui repellat vel alias error distinctio. Nisi autem accusantium tempore quae aut id, suscipit fugiat! Inventore magni beatae, libero nam minima, repudiandae voluptates, aliquid repellendus dolores unde iusto corporis! Minus corporis optio vero dolor?"
        ],
        [
            "title" => "Second Post Title",
            "slug" => "second-post-title",
            "author" => "Person Two",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus eos ullam dicta, natus nobis aperiam molestias? Voluptatibus, dignissimos neque omnis reprehenderit velit ipsum expedita fugiat quam facilis nulla, quibusdam nisi deleniti a qui necessitatibus quas aliquid provident quasi minus esse. Repellendus natus nihil in, deserunt, laboriosam perferendis aliquam rem magni asperiores iure voluptates dolorum sequi fuga laudantium mollitia, doloribus debitis cum officia non ducimus quis! Ipsum facilis maxime adipisci expedita cupiditate, alias quasi natus rem, unde repellendus ullam esse dolorum nobis? Dolores praesentium excepturi exercitationem error fugit voluptas qui quasi, sed aperiam aliquam voluptates obcaecati rem animi eligendi eveniet velit."
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
