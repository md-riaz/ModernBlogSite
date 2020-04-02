<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(1),
        'category_id' => $faker->randomDigit,
        'user_id' => $faker->randomDigit,
        'post_img' =>  $faker->imageUrl($width = 640, $height = 480),
        'details' => $faker->sentence(5)
    ];
});
