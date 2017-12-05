<?php

$factory->define(App\Containers\Blog\Models\Blog::class, function (Faker\Generator $faker) {
    return [
        'title'     => $faker->sentence,
        'body'    => $faker->paragraph
    ];
});