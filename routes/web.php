<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function (){
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function() {
    return view('about', [
    "title" => "About",
    "name" => "Guntur Pongky Prayusti",
    "email" => "gunturpongkyp@gmail.com",
    "image" => "profile.jpeg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts =[
        [
            "title" => " Judul Post Pertama",
            "slug" => "judul-post-kedua",
            "author" => "Guntur Pongky P",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ab, voluptatem sint praesentium quis quo, itaque blanditiis quaerat maxime fuga saepe quia qui voluptates architecto consequuntur ea numquam doloremque accusantium. Maiores, magnam amet! Sit necessitatibus in quae, veritatis nesciunt voluptatem molestiae minima dolore! Facere qui suscipit repudiandae illo, quos facilis delectus voluptatum minus iusto fugit quibusdam exercitationem explicabo consequuntur ex saepe, placeat dolores dolor. Ipsa voluptatem, dolorem quia inventore nisi, repellat aliquid reprehenderit iste numquam quae natus nemo quaerat enim?"
        ],
        [
            "title" => " Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Guntur Pongky P",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ab, voluptatem sint praesentium quis quo, itaque blanditiis quaerat maxime fuga saepe quia qui voluptates architecto consequuntur ea numquam doloremque accusantium. Maiores, magnam amet! Sit necessitatibus in quae, veritatis nesciunt voluptatem molestiae minima dolore! Facere qui suscipit repudiandae illo, quos facilis delectus voluptatum minus iusto fugit quibusdam exercitationem explicabo consequuntur ex saepe, placeat dolores dolor. Ipsa voluptatem, dolorem quia inventore nisi, repellat aliquid reprehenderit iste numquam quae natus nemo quaerat enim?"
        ],
    ];
    return view('posts', [
        "title" => "posts",
        "posts" => $blog_posts
    ]); 
    
});

Route::get('posts/{slug}', function($slug){
    $blog_posts =[
        [
            "title" => " Judul Post Pertama",
            "slug" => "judul-post-kedua",
            "author" => "Guntur Pongky P",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ab, voluptatem sint praesentium quis quo, itaque blanditiis quaerat maxime fuga saepe quia qui voluptates architecto consequuntur ea numquam doloremque accusantium. Maiores, magnam amet! Sit necessitatibus in quae, veritatis nesciunt voluptatem molestiae minima dolore! Facere qui suscipit repudiandae illo, quos facilis delectus voluptatum minus iusto fugit quibusdam exercitationem explicabo consequuntur ex saepe, placeat dolores dolor. Ipsa voluptatem, dolorem quia inventore nisi, repellat aliquid reprehenderit iste numquam quae natus nemo quaerat enim?"
        ],
        [
            "title" => " Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Guntur Pongky P",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ab, voluptatem sint praesentium quis quo, itaque blanditiis quaerat maxime fuga saepe quia qui voluptates architecto consequuntur ea numquam doloremque accusantium. Maiores, magnam amet! Sit necessitatibus in quae, veritatis nesciunt voluptatem molestiae minima dolore! Facere qui suscipit repudiandae illo, quos facilis delectus voluptatum minus iusto fugit quibusdam exercitationem explicabo consequuntur ex saepe, placeat dolores dolor. Ipsa voluptatem, dolorem quia inventore nisi, repellat aliquid reprehenderit iste numquam quae natus nemo quaerat enim?"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
