<?php

use Faker\Generator as Faker;

$factory->define(App\Victim::class, function (Faker $faker) {
    return [
        'ip' => $faker->ipv4,
        'email' => $faker->unique()->safeEmail,
        'begin' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'end' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'encrypt_count' => $faker->randomDigit,
        'public_key' => $faker->randomDigit,

        'encrypted' => false,
        'worker_id'=>  1,

    ];
});
