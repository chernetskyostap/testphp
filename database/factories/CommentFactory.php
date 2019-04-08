<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,3),
        'post_id' => rand(3,10),
        'text' => $faker->realText(rand(20, 25))
    ];
});
