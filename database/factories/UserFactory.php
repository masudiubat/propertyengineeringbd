<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'role_id' => 1,
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'mobile' => '01721592088',
        'email_verified_at' => now(),
        'password' => '$2y$10$hebo7Rehm263b/qS5610v.WAnN9gk86NfiSbwEs1hpQr08aQ.rkhu', // password
        'image' => 'demo.jpg',
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Role::class, function (Faker $faker) {
    return [
        'name' => 'Admin',
        'slug' => 'admin',
        'created_at' => date('Y-m-d'),
    ];
});
