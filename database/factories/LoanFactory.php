<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Loan;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Loan::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigit,
        'borrowed' => $faker->randomFloat,
        'amount_paid' => $faker->randomFloat,
        'interest' => $faker->randomFloat,
        'total' => $faker->randomFloat,
    ];
});
