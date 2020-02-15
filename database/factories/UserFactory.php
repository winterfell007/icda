<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'propertyID' => rand(100000, 999999),
        'title' => $faker->title('male'|'female'),
        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'mobileNumber' => $faker->e164PhoneNumber,
        'profession' => $faker->jobTitle,
        'zoneCode' => $faker->postCode,
        'gender' => $faker->randomElement(['Male', 'Female']),
        'maritalStatus' => $faker->randomElement(['Single', 'Married', 'Divorced']),
        'membership' => 'member',
        'address' => $faker->streetAddress,
        'username'=> ucwords($faker->userName),
    ];
});
