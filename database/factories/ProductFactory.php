<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
    ];
});
