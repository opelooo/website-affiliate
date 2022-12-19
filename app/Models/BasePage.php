<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class BasePage {

    private static $pages_data = [
        [
            "name" => "Affiliate",
            "title" => "Home",
            "slug" => "home"
        ],
        [
            "name" => "Affiliate",
            "title" => "Rekomendasi Audio",
            "slug" => "rekomen-audio"
        ],
        [
            "name" => "Affiliate",
            "title" => "Rekomendasi Keyboard",
            "slug" => "rekomen-keyboard"
        ],
        [
            "name" => "Affiliate",
            "title" => "Admin",
            "slug" => "login"
        ]
    ];

    public static function allPost() {
        return collect(self::$pages_data);
    }
    public static function findPage($slug) {
        $posts = static::allPost();

        return $posts->firstWhere('slug', $slug);
    }
}
