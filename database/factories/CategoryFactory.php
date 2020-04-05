<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'slug' => $faker->name(),
        'user_id' => factory(App\User::class)
    ];
});
