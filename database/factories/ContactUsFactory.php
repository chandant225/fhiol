<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ContactUs;
use Faker\Generator as Faker;

$factory->define(ContactUs::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'mobile' => $faker->e164PhoneNumber,
        'message' => $faker->paragraphs(3, true)
     ];
});
