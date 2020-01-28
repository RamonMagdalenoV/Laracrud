<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name'        => $faker->sentence(2),
        'description' => $faker->text(600),
        'stock'       => $faker->numberBetween(1,10)
    ];
});
