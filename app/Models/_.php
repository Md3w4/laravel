<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Posta
{
    private static $blog_posts = [
        [
            "title" => "Post 1",
            "slug" => "post-1",
            "author" => "Maha Dewa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, voluptatem pariatur vel non vitae nulla accusamus illo nesciunt dolor neque dicta laudantium optio cumque commodi delectus ex dolore molestias placeat molestiae velit laboriosam possimus quaerat! Quasi sapiente repellat eaque enim animi cum sint facere praesentium ea rem? Consequuntur praesentium consequatur saepe in, incidunt explicabo nemo a, dolorum nihil, ex veritatis tempora fuga laudantium? Et dolor quia rerum expedita quos dolorum, perspiciatis dignissimos repudiandae aspernatur culpa?"
        ],
        [
            "title" => "Post 2",
            "slug" => "post-2",
            "author" => "Maulana Muhammad",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptate amet quae nam animi temporibus illum praesentium molestiae quaerat, cumque consectetur cupiditate est veritatis dolorum corrupti cum ipsam repudiandae nostrum mollitia unde doloremque vitae rerum aspernatur placeat! Tenetur voluptatum illo architecto saepe maiores, corrupti culpa, quisquam velit laboriosam molestias, at aspernatur. Cupiditate, tenetur voluptates incidunt tempora quos tempore at natus ratione, assumenda blanditiis dolore doloremque harum quidem in error ex labore expedita aspernatur qui impedit! Modi, sapiente explicabo! Voluptas quos itaque odio sapiente, id eaque! Nihil vitae nesciunt laboriosam. Sunt impedit sint, voluptatem tempore iste repudiandae odit voluptates harum libero?"
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
