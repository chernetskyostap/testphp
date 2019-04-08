<?php


use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'user_id' => rand(1,3),
        'description' => $faker->realText(rand(40, 60)),
        'short_description' => $faker->realText(rand(15, 20)),
        'published' => 1,
        'slug'   => str_replace('--', '-', strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', trim($faker->sentence(5))))),
    ];
});
