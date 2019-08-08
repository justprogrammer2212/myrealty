<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Realtor;
use Faker\Generator as Faker;

$factory->define(Realtor::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
    ];
});
