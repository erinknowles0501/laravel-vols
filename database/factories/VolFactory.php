<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vol;
use Faker\Generator as Faker;

$factory->define(Vol::class, function (Faker $faker) {
    return [
        'name_last' => $faker->lastName(),
        'name_first' => $faker->firstName(),
        'date_added' => now(),
    ];
});
