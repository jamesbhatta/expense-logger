<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Expense;
use Faker\Generator as Faker;

$factory->define(Expense::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'amount' => $faker->numberBetween($min = 1000, $max = 10000),
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'details' => $faker->text($maxNbChars = 150),
        'user_id' => \App\User::all()->random()->id
    ];
});
