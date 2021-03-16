<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Colleague::class, function (Faker $faker) {
$gender = $faker->randomElement(['male', 'female']);

    return [
        'first_name'    => $faker->firstName($gender),
        'last_name'     => $faker->lastName,
        'email'         => $faker->email,
        'phone_number'  => $faker->phoneNumber,
        'gender'        => $gender,
        'speciality'    => $faker->randomElement([
            'Programmer',
            'Design',
            'Web Dev',
            'Photoshop',
            'Animation'
        ]),
        'addres'       => $faker->address
    ];
});