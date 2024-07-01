<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ["name" => "Irfan Adi", 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Irfan Adi',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus neque iste, assumenda earum excepturi nihil veritatis! Amet esse totam repellat illum eius ex, nobis, omnis dolorum voluptatum molestiae suscipit sed?',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Irfan Adi',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptas illo alias voluptatem. Officiis, ea quas molestias velit quibusdam soluta eaque, totam corporis adipisci quasi magni ipsam nihil distinctio explicabo?',
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Irfan Adi',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus neque iste, assumenda earum excepturi nihil veritatis! Amet esse totam repellat illum eius ex, nobis, omnis dolorum voluptatum molestiae suscipit sed?',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Irfan Adi',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptas illo alias voluptatem. Officiis, ea quas molestias velit quibusdam soluta eaque, totam corporis adipisci quasi magni ipsam nihil distinctio explicabo?',
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});