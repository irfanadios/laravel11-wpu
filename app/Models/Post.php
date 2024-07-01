<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
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
    }

    public static function find($slug): array {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        
        if (! $post) {
            abort(404);
        }

        return $post;
    }
}