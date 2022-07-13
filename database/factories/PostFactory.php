<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'author_id' => rand(1, 4),
        'title' => $faker->realText(rand(25, 30)),
        'excerpt' => $faker->realText(rand(100, 120)),
        'body' => $faker->realText(rand(200, 300)),
        'created_at' => $faker->dateTimeBetween('-60 days', '-30 days'),
        'updated_at' => $faker->dateTimeBetween('-20 days', '-1 days'),
    ];
});
