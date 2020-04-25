<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' =>  $faker->paragraph($nbSentences = 150, $variableNbSentences = true),
        'price' => $faker->numberBetween($min = 1000, $max = 5000),
        'offer' => $faker->numberBetween($min = 100, $max = 999),
        'category_id' => rand(1, 5),
        'commerce_id' => rand(1, 10),
    ];
});
