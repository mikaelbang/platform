<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('slicky12'), // secret
        'address' => $faker->streetName,
        'city' => $faker->city,
        'zip' => $faker->postcode,
        'remember_token' => str_random(10),
    ];
});

//Create REcruiter and company ads and then create user when they are created (if you can create child first...)

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('slicky12'), // secret
        'address' => $faker->streetName,
        'city' => $faker->city,
        'zip' => $faker->postcode,
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Thread::class, function ($faker) {
    $title = $faker->sentence;

    return [
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'channel_id' => function () {
            return factory('App\Channel')->create()->id;
        },
        'title' => $title,
        'body'  => $faker->paragraph,
        'visits' => 0,
        'slug' => str_slug($title),
        'locked' => false
    ];
});

$factory->define(App\Ad::class, function ($faker) {
    $title = $faker->sentence;

    return [
        'company_id' => function () {
            return factory('App\User')->create()->id;
        },
        'title' => $title,
        'description' => $faker->paragraph,
        'slug' => str_slug($title),
        'expiration_date' => Carbon::now(+45)
    ];
});
