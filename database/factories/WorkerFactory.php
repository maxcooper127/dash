<?php

use Faker\Generator as Faker;

$factory->define(App\Worker::class, function (Faker $faker) {
    return [
        'ip' => $faker->ipv4,
        'email' => $faker->unique()->safeEmail,
        'encrypt_today' => $faker->randomDigit,
        'encrypt_week' => $faker->randomDigit,
        'encrypt_mouth' => $faker->randomDigit,
        'encrypt_all_time' => $faker->randomDigit,

        'decrypt_today' => $faker->randomDigit,
        'decrypt_week' => $faker->randomDigit,
        'decrypt_mouth' => $faker->randomDigit,
        'decrypt_all_time' => $faker->randomDigit,

        'block' => false,
    ];
});