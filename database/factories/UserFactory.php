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
    $firstname = $faker->firstNameMale;
    $lastname = $faker->lastName;
    $email = str_slug($firstname).'.'.str_slug($lastname).'@example.com';
    return [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'password' => bcrypt('slicky12'), // secret
        'address' => $faker->streetName,
        'city' => $faker->city,
        'zip' => $faker->postcode,
        'remember_token' => str_random(10),
    ];
});

//Create REcruiter and company ads and then create user when they are created (if you can create child first...)

$factory->define(App\Recriuter::class, function (Faker $faker) {
    $charid = strtoupper(md5(uniqid(rand(), true)));
    $token = substr($charid, 0, 8)
        .substr($charid, 8, 4)
        .substr($charid,12, 4)
        .substr($charid,16, 4)
        .substr($charid,20,12);
    return [
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'lft' => 1,
        'rgt' => 2,
        'token' => $token
    ];
});


$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
    ];
});

$factory->define(App\Company::class, function ($faker) {

    return [
        'name' => $faker->name,
        //'slug'  => $faker->paragraph,
    ];
});

$factory->define(App\Department::class, function ($faker) {

    return [
        'company_id' => 1,
        'name' => $faker->name,
        //'slug'  => $faker->paragraph,
    ];
});



$factory->define(App\Ad::class, function ($faker) {
    $title = $faker->sentence;
    $d_id = $faker->numberBetween(1,4);
    if ( $d_id >= 2 ) {
        $user_id = $faker->numberBetween(1,3);
        $a_email = 'hello@cone.digital';
    }else{
        $user_id = $faker->numberBetween(4,5); 
        $a_email = 'hello@chessit.se';
    }

    return [
        'user_id' => $user_id,
        'department_id' => $d_id,
        'title' => $title,
        'description' => $faker->paragraph,
        'slug' => str_slug($title),
        'status' => 1,
        'apply_email' => $a_email,
        'category_id' => $faker->numberBetween(1,4),
        'expiration_date' => Carbon::now(+1)
    ];
});


$factory->define(App\Benefit::class, function ($faker) {
    return [
        'name' => $faker->name,
        'icon' => $faker->name,
        'color' => '#000',
    ];
});


$factory->define(App\Category::class, function ($faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->name,
        'order' => '1',
    ];
});

$factory->define(App\Tag::class, function ($faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->name,
        'category_id' => 1,
    ];
});