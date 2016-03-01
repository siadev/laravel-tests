<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
$localisedFaker = Faker\Factory::create("en_AU");

$factory->define(LaravelExamples\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(LaravelExamples\Flyer::class, function (Faker\Generator $faker) {
    return [
        'street'      => $faker->streetAddress,
        'city'        => $faker->city,
        'postcode'    => $faker->postcode,
        'state'       => $faker->state,
        'country'     => $faker->country,
        'price'       => $faker->numberBetween(10000, 5000000),
        'description' => $faker->paragraph(3),
    ];
});


$factory->define(LaravelExamples\cms_page::class, function (Faker\Generator $faker) {
    return [
        'street'      => $faker->streetAddress,
        'city'        => $faker->city,
        'postcode'    => $faker->postcode,
        'state'       => $faker->state,
        'country'     => $faker->country,
        'price'       => $faker->numberBetween(10000, 5000000),
        'description' => $faker->paragraph(3),
    ];
});
