<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class BasePage {

    private static $nama = "Fernanda Gunsan";
    private static $pages_data = [
        [
            "name" => "Fernanda Gunsan",
            "title" => "Home",
            "slug" => "home"
        ],
        [
            "name" => "Fernanda Gunsan",
            "title" => "Kitab Audio",
            "slug" => "kitab-audio"
        ],
        [
            "name" => "Fernanda Gunsan",
            "title" => "Kitab Keyboard",
            "slug" => "kitab-keyboard"
        ],
        [
            "name" => "Fernanda Gunsan",
            "title" => "Gunsan's Only Page",
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
