<?php

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'body' => $faker->paragraph,
    ];
});
