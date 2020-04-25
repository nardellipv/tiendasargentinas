<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment_Commerce;
use Faker\Generator as Faker;

$factory->define(Payment_Commerce::class, function (Faker $faker) {
    return [
        'commerce_id' => rand(1, 10),
        'payment_id' => rand(1, 8),
    ];
});
