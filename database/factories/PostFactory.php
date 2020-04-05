<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(1),
        'category_id' => $faker->randomDigit,
        'user_id' => factory(App\User::class),
        'post_img' =>  $faker->imageUrl($width = 640, $height = 480),
        'details' => $faker->paragraph(10)
    ];
});
