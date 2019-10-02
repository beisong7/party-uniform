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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'who'=> 4,
        'unid'=> uniqid('Admin',false),
        'first_name'=> $faker->firstNameMale,
        'last_name'=> $faker->lastName,
        'email'=> 'admin1@party.com',
        'username'=> 'partyuniform',
        'phone'=> $faker->phoneNumber,
        'passport'=> null,
        'active'=> true,
        'address'=> $faker->address,
        'office'=> $faker->company,
        'password'=> bcrypt('password'),
    ];
});
