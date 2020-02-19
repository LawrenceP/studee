<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commodity;
use Faker\Generator as Faker;

$factory->define(Commodity::class, function (Faker $faker) {
    return [
        'segment' => $faker->numberBetween(100,100000),
        'segment_name' => $faker->name,
        'family' => $faker->numberBetween(100,100000),
        'family_name' => $faker->name,
        'class' => $faker->numberBetween(100,100000),
        'class_name' => $faker->name,
        'commodity' => $faker->numberBetween(100,100000),
        'commodity_name' => $faker->name,
    ];
});
