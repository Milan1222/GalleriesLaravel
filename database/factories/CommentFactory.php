<?php

use Faker\Generator as Faker;

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

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->text($maxNbChars = 255),
        'gallery_id' => App\Galleries::all()->random()->id,
        'user_id' => App\User::all()->random()->id
    ];
});
