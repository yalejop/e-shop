<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'description' => $faker->paragraph(2),
        'price' => $faker->randomFloat($maxDecimals = 2, $min = 3, $max = 100),
        'stock' => $faker->numberBetween(1, 10),
        'status' => $faker->randomElement(['available', 'unavailable']),
    ];
});
