<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    $title = $faker->sentence(1);
    return [
        'name' => $title,
    ];
});
